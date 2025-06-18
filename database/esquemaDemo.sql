# Esquema de la BD con sus tablas y artributos y conexiones

Table people {
  id integer [primary key]
  run varchar
  names varchar
  last_names varchar
  created_at timestamp
  updated_at timestamp
}

Table users {
  id integer [primary key]
  staff_id integer
}

Table staff {
  id integer [primary key]
  person_id integer [not null, unique]
  role varchar
  start_date date
  end_date date [null]
  phone varchar
  email varchar [null]
  address varchar
  photo varchar [null]
  notes varchar [null]
  active boolean [default: true]
  deleted_at timestamp [null]
  created_at timestamp
  updated_at timestamp
}

Table entry_types {
  id integer [primary key]
  name varchar [unique]
  description varchar [null]
  created_at timestamp
  updated_at timestamp
}

Table logs {
  id integer [primary key]
  work_session_id integer [not null]
  entry varchar
  entryType_id integer [not null]
  created_at timestamp
  updated_at timestamp
}

Table schedules {
  id integer [primary key]
  name varchar
  description text [null]
  start_time time
  end_time time
  is_active boolean [default: true]
  break_duration integer [default: 30]
  created_at timestamp
  updated_at timestamp
}

Table work_sessions {
  id integer [primary key]
  staff_id integer [not null]
  schedule_id integer [not null]
  tower_id integer [not null]
  start_time datetime
  end_time datetime [null]
  created_at timestamp
  updated_at timestamp
}

Table owners {
  id integer [primary key]
  person_id integer [not null, unique]
  phone varchar [null]
  email varchar [null]
  address varchar [null]
  photo varchar [null]
  notes varchar [null]
  deleted_at timestamp [null]
  created_at timestamp
  updated_at timestamp
}

Table towers {
  id integer [primary key]
  name varchar [unique]
  address varchar
  leader_id integer [null]
  created_at timestamp
  updated_at timestamp
}

Table apartments {
  id integer [primary key]
  owner_id integer [not null]
  tower_id integer [not null]
  number integer [unique]
  details varchar [null]
  is_available boolean [default: true]
  created_at timestamp
  updated_at timestamp
}

Table external_workers {
  id integer [primary key]
  person_id integer [not null, unique]
  apartament_id integer [not null]
  job_title varchar
  start_date date [null]
  end_date date [null]
  deleted_at timestamp [null]
  created_at timestamp
  updated_at timestamp
}

Table residents {
  id integer [primary key]
  person_id integer [not null, unique]
  medical_disabilities varchar [null]
  created_at timestamp
  updated_at timestamp
}

//LISTO
Table vehicles {
  id integer [primary key]
  person_id integer [not null]
  license_plate varchar [unique]
  brand varchar
  model varchar [null]
  color varchar [null]
  created_at timestamp
  updated_at timestamp
}

Table visits {
  id integer [primary key]
  person_id integer [not null]
  apartment_id integer [not null]
  entry_time datetime
  exit_time datetime [null]
  created_at timestamp
  updated_at timestamp
}

//LISTO
Table patrols {
  id integer [primary key]
  work_session_id integer [not null]
  details varchar
  start_time datetime
  created_at timestamp
  updated_at timestamp
}

// Relationships
Ref: staff.person_id > people.id
Ref: logs.work_session_id > work_sessions.id
Ref: logs.entryType_id > entry_types.id
Ref: work_sessions.staff_id > staff.id
Ref: work_sessions.schedule_id > schedules.id
Ref: owners.person_id > people.id
Ref: towers.leader_id > residents.id
Ref: apartments.owner_id > owners.id
Ref: apartments.tower_id > towers.id
Ref: external_workers.person_id > people.id
Ref: external_workers.apartament_id > apartments.id
Ref: residents.person_id > people.id
Ref: vehicles.person_id > people.id
Ref: visits.person_id > people.id
Ref: visits.apartment_id > apartments.id
Ref: patrols.work_session_id > work_sessions.id
Ref: work_sessions.tower_id > towers.id

Ref: "staff"."start_date" < "staff"."person_id"
