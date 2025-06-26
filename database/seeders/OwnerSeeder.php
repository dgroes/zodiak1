<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owners = [
            /* DATA PARA AGREGAR PROPIETARIOS EN Towers: Torre Sur */
             [
                'person_id' => 1,
                'phone' => "56920304086",
                'email' => 'horacio.gutierritos@mail.com',
                'address' => 'Av. Los Leones 123, Depto 201',
                'photo' => null,
                'notes' => 'Prefiere contacto por WhatsApp'
            ],
            [
                'person_id' => 2,
                'phone' => "56998765432",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 3,
                'phone' => "56987654321",
                'email' => 'juan.courtois@correo.cl',
                'address' => 'Calle Las Camelias 456, Depto 203',
                'photo' => null,
                'notes' => 'Solicitó información sobre áreas comunes'
            ],
            [
                'person_id' => 4,
                'phone' => "56911223344",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 5,
                'phone' => "56955443322",
                'email' => 'maria.leonidas@gmail.com',
                'address' => 'Pasaje Los Alerces 789, Depto 301',
                'photo' => null,
                'notes' => 'Viaja frecuentemente por trabajo'
            ],
            [
                'person_id' => 6,
                'phone' => "56966778899",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 7,
                'phone' => "56999887766",
                'email' => 'bernardita.lirano@empresa.com',
                'address' => null,
                'photo' => null,
                'notes' => 'Contactar después de las 18:00 hrs'
            ],
            [
                'person_id' => 8,
                'phone' => "56912345678",
                'email' => null,
                'address' => 'Av. Providencia 2345, Depto 403',
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 9,
                'phone' => "56987651234",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 10,
                'phone' => "56955556677",
                'email' => 'marcos.bronston@mail.cl',
                'address' => null,
                'photo' => null,
                'notes' => 'Dueño de mascota'
            ],
            [
                'person_id' => 11,
                'phone' => "56933445566",
                'email' => null,
                'address' => 'Calle Los Plátanos 678, Depto 501',
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 12,
                'phone' => "56977889900",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 13,
                'phone' => "56999001122",
                'email' => 'gianina.suarez@correo.com',
                'address' => 'Av. Las Condes 9876, Depto 503',
                'photo' => null,
                'notes' => 'Solicitó estacionamiento visitantes'
            ],
            [
                'person_id' => 14,
                'phone' => "56922334455",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 15,
                'phone' => "56966778800",
                'email' => 'victor.corriones@mail.com',
                'address' => 'Calle Los Aromos 345, Depto 601',
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 16,
                'phone' => "56911223300",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 17,
                'phone' => "56999880011",
                'email' => 'miguel.cuevas@correo.cl',
                'address' => null,
                'photo' => null,
                'notes' => 'Trabaja en casa'
            ],
            [
                'person_id' => 18,
                'phone' => "56933440022",
                'email' => null,
                'address' => 'Pasaje Los Olivos 123, Depto 603',
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 19,
                'phone' => "56955667788",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 20,
                'phone' => "56988990011",
                'email' => 'gladys.helder@mail.com',
                'address' => 'Av. Los Presidentes 4567, Depto 701',
                'photo' => null,
                'notes' => 'Adulto mayor'
            ],
            [
                'person_id' => 21,
                'phone' => "56911221122",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 22,
                'phone' => "56933442233",
                'email' => 'manuel.contreras@correo.cl',
                'address' => 'Calle Los Alerces 890, Depto 705',
                'photo' => null,
                'notes' => 'Trabaja en horario nocturno'
            ],
            [
                'person_id' => 23,
                'phone' => "56966773344",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 24,
                'phone' => "56988994455",
                'email' => 'isidora.munoz@mail.com',
                'address' => null,
                'photo' => null,
                'notes' => 'Prefiere contacto por SMS'
            ],
            [
                'person_id' => 25,
                'phone' => "56911225566",
                'email' => null,
                'address' => 'Pasaje Los Olivos 456, Depto 801',
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 26,
                'phone' => "56933446677",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 27,
                'phone' => "56966778899",
                'email' => 'felipe.gonzalez@correo.cl',
                'address' => 'Av. Las Torres 1234, Depto 805',
                'photo' => null,
                'notes' => 'Dueño de mascota'
            ],
            [
                'person_id' => 28,
                'phone' => "56988990012",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 29,
                'phone' => "56911223345",
                'email' => 'catalina.soto@mail.com',
                'address' => null,
                'photo' => null,
                'notes' => 'Contactar después de las 17:00 hrs'
            ],
            [
                'person_id' => 30,
                'phone' => "56933445578",
                'email' => null,
                'address' => 'Calle Los Pinos 678, Depto 901',
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 31,
                'phone' => "56966778801",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 32,
                'phone' => "56988991134",
                'email' => 'juan.perez@correo.cl',
                'address' => 'Av. Los Jardines 3456, Depto 905',
                'photo' => null,
                'notes' => 'Adulto mayor'
            ],
            [
                'person_id' => 33,
                'phone' => "56911224467",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 34,
                'phone' => "56933447790",
                'email' => 'francisca.morales@mail.com',
                'address' => null,
                'photo' => null,
                'notes' => 'Viaja frecuentemente'
            ],
            [
                'person_id' => 35,
                'phone' => "56966770013",
                'email' => null,
                'address' => 'Pasaje Los Cerezos 789, Depto 1001',
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 36,
                'phone' => "56988993346",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 37,
                'phone' => "56911226679",
                'email' => 'roberto.sanchez@correo.cl',
                'address' => 'Av. Los Plátanos 901, Depto 1005',
                'photo' => null,
                'notes' => 'Prefiere comunicación por email'
            ],
            [
                'person_id' => 38,
                'phone' => "56933449902",
                'email' => null,
                'address' => null,
                'photo' => null,
                'notes' => null
            ],
            [
                'person_id' => 39,
                'phone' => "56966772235",
                'email' => 'claudia.hernandez@mail.com',
                'address' => null,
                'photo' => null,
                'notes' => 'Tiene dos mascotas'
            ],
            [
                'person_id' => 40,
                'phone' => "56988995568",
                'email' => null,
                'address' => 'Calle Los Robles 234, Depto 1101',
                'photo' => null,
                'notes' => null
            ]
        ];

        foreach ($owners as $owner) {
            try {
                Owner::create($owner);
                $this->command->info("[OK] Owner {$owner['person_id']} creado 🔑");
            } catch (\Exception $e) {
                $this->command->error("Error al crear Owner {$owner['person_id']} :{$e->getMessage()}");
            }
        }
    }
}
