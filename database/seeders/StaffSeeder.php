<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $staffMembers = [
            [
                'run' => '13781401-1',
                'document_number' => null,
                'names' => 'Jose Luis',
                'last_names' => 'Alarcon Godoy',
                'role' => 'Administrador',
                'start_date' => '1995-02-06',
                'end_date' => null,
                'phone' => '56910209856',
                'address' => 'Av Chamisero 15900',
                'photo' => null,
                'notes' => 'Mayordomo y jefe de Conserjes',
                'active' => true,
            ],
            [
                'run' => '19913442-2',
                'document_number' => null,
                'names' => 'Diego Andrés',
                'last_names' => 'Peralta Urrutia',
                'role' => 'Conserje',
                'start_date' => '2022-07-01',
                'end_date' => null,
                'phone' => '56930608149',
                'address' => 'Arturo Prat 69 Pobl. Bustamante',
                'photo' => null,
                'notes' => null,
                'active' => true,
            ],
            [
                'run' => '12345678-9',
                'document_number' => null,
                'names' => 'Kakashi',
                'last_names' => 'Hatake',
                'role' => 'Conserje',
                'start_date' => '2023-01-15',
                'end_date' => null,
                'phone' => '56912345678',
                'address' => 'Calle Falsa 123',
                'photo' => null,
                'notes' => null,
                'active' => true,
            ],
            [
                'run' => null,
                'document_number' => 'BASDC1351',
                'names' => 'Junior Peterson',
                'last_names' => 'Jean',
                'role' => 'Conserje',
                'start_date' => '2023-03-10',
                'end_date' => null,
                'phone' => '56987654321',
                'address' => 'Calle Verdadera 456',
                'photo' => null,
                'notes' => null,
                'active' => true,
            ],
            [
                'run' => '11222333-4',
                'document_number' => null,
                'names' => 'Ana Isabel',
                'last_names' => 'Rodríguez Vargas',
                'role' => 'Auxiliar',
                'start_date' => '2023-05-20',
                'end_date' => null,
                'phone' => '56923456789',
                'address' => 'Calle Real 789',
                'photo' => null,
                'notes' => null,
                'active' => true,
            ],
            [
                'run' => '55666777-8',
                'document_number' => null,
                'names' => 'Pedro Pablo',
                'last_names' => 'Sánchez Muñoz',
                'role' => 'Conserje',
                'start_date' => '2023-06-01',
                'end_date' => null,
                'phone' => '56934567890',
                'address' => 'Calle Ficticia 321',
                'photo' => null,
                'notes' => null,
                'active' => true,
            ],
            [
                'run' => '22333444-5',
                'document_number' => null,
                'names' => 'Lucía Valentina',
                'last_names' => 'Torres Ríos',
                'role' => 'Auxiliar',
                'start_date' => '2023-07-15',
                'end_date' => null,
                'phone' => '56945678901',
                'address' => 'Calle Nueva 654',
                'photo' => null,
                'notes' => null,
                'active' => true,
            ],
            [
                'run' => null,
                'document_number' => 'AB1234567',
                'names' => 'Diego Alejandro',
                'last_names' => 'Méndez Fuentes',
                'role' => 'Conserje',
                'start_date' => '2023-08-10',
                'end_date' => null,
                'phone' => '56956789012',
                'address' => 'Calle Antigua 987',
                'photo' => null,
                'notes' => null,
                'active' => true,
            ],
            [
                'run' => '77888999-1',
                'document_number' => null,
                'names' => 'Jorge Luis',
                'last_names' => 'Herrera Pizarro',
                'role' => 'Conserje',
                'start_date' => '2023-10-01',
                'end_date' => null,
                'phone' => '56978901234',
                'address' => 'Calle Clásica 456',
                'photo' => null,
                'notes' => null,
                'active' => true,
            ],
            [
                'run' => null,
                'document_number' => 'CD987654',
                'names' => 'Francisca Alejandra',
                'last_names' => 'Navarro Soto',
                'role' => 'Auxiliar',
                'start_date' => '2023-11-20',
                'end_date' => null,
                'phone' => '56989012345',
                'address' => 'Calle Histórica 789',
                'photo' => null,
                'notes' => null,
                'active' => true,
            ],
            [
                'run' => null,
                'document_number' => 'ST870621345',
                'names' => 'Charles',
                'last_names' => 'Milles Manson',
                'role' => 'Administrador',
                'start_date' => '1947-11-20',
                'end_date' => '1961-11-20',
                'phone' => '56909842345',
                'address' => 'Bakersfield, California 124',
                'photo' => null,
                'notes' => null,
                'active' => false,
            ],
            [
                'run' => null,
                'document_number' => 'ST870621341',
                'names' => 'John',
                'last_names' => 'Doe',
                'role' => 'Conserje',
                'start_date' => '1999-12-20',
                'end_date' => '2004-12-20',
                'phone' => '56989012345',
                'address' => 'South Orange, Nueva Jersey 624',
                'photo' => null,
                'notes' => 'I admire you. I dont know how you found me, but imagine my surprise. I respect you law',
                'active' => false,
            ],
        ];

        /* C09: Manejador de errores inteligente */
        foreach ($staffMembers as $staff) {
            try {
                Staff::create($staff);
                $this->command->info("[OK] Staff {$staff['names']} creado.");
            } catch (\Exception $e) {
                $this->command->error("Error al crear staff {$staff['names']}: {$e->getMessage()}");
            }
        }
    }
}
