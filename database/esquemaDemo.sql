# Esquema de la BD con sus tablas y artributos y conexiones

Create Table usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
);

Create Table Torres()
Create Table EstacionamientoVisitas
Create Table EstacionamientoPropietarios
Create Table Bitactora
Create Table Visitas
Create Table Propietarios
Create Table Departamentos
Create Table Residentes
Create Table Ronda
Create Table Encargos
Create Table QuejasSugerencias
Create Table Eventos
Create Table Bodegas
Create Table Horarios
Create Table Roles
Create Table
