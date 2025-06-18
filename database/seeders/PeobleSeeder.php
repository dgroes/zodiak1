<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeobleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('peoples')->insert([
            [
                'run' => '12345678-9',
                'document_number' => 'PASSP001',
                'names' => 'Juan Antonio',
                'last_names' => 'Pérez González',
            ],
            [
                'run' => '9876543-2',
                'document_number' => null,
                'names' => 'María Fernanda',
                'last_names' => 'López Martínez',
            ],
            [
                'run' => null,
                'document_number' => 'DNI123456',
                'names' => 'Carlos Andrés',
                'last_names' => 'Gómez Silva',
            ],
            [
                'run' => '11222333-4',
                'document_number' => null,
                'names' => 'Ana Isabel',
                'last_names' => 'Rodríguez Vargas',
            ],
            [
                'run' => '55666777-8',
                'document_number' => null,
                'names' => 'Pedro Pablo',
                'last_names' => 'Sánchez Muñoz',
            ],
            // 15 personas adicionales (ejemplos variados)
            [
                'run' => '22333444-5',
                'document_number' => null,
                'names' => 'Lucía Valentina',
                'last_names' => 'Torres Ríos',
            ],
            [
                'run' => null,
                'document_number' => 'AB1234567',
                'names' => 'Diego Alejandro',
                'last_names' => 'Méndez Fuentes',
            ],
            [
                'run' => '44555666-7',
                'document_number' => null,
                'names' => 'Camila Ignacia',
                'last_names' => 'Vega Díaz',
            ],
            [
                'run' => '77888999-1',
                'document_number' => null,
                'names' => 'Jorge Luis',
                'last_names' => 'Herrera Pizarro',
            ],
            [
                'run' => null,
                'document_number' => 'CD987654',
                'names' => 'Francisca Alejandra',
                'last_names' => 'Navarro Soto',
            ],
            [
                'run' => '33444555-6',
                'document_number' => null,
                'names' => 'Miguel Ángel',
                'last_names' => 'Castro León',
            ],
            [
                'run' => '66777888-9',
                'document_number' => null,
                'names' => 'Daniela Paz',
                'last_names' => 'Flores Salgado',
            ],
            [
                'run' => null,
                'document_number' => 'EF456789',
                'names' => 'Roberto Carlos',
                'last_names' => 'Jiménez Mendoza',
            ],
            [
                'run' => '88999000-2',
                'document_number' => null,
                'names' => 'Isabel Cristina',
                'last_names' => 'Orellana Parra',
            ],
            [
                'run' => '99000111-3',
                'document_number' => null,
                'names' => 'Patricio Andrés',
                'last_names' => 'Aravena Riquelme',
            ],
            [
                'run' => null,
                'document_number' => 'GH789012',
                'names' => 'Valentina Javiera',
                'last_names' => 'Sepúlveda Guzmán',
            ],
            [
                'run' => '11122233-4',
                'document_number' => null,
                'names' => 'Sergio Eduardo',
                'last_names' => 'Miranda Lagos',
            ],
            [
                'run' => '44455566-7',
                'document_number' => null,
                'names' => 'Carolina Andrea',
                'last_names' => 'Silva Peña',
            ],
            [
                'run' => null,
                'document_number' => 'IJ345678',
                'names' => 'Felipe Ignacio',
                'last_names' => 'Tapia Contreras',
            ],
            [
                'run' => '77788899-0',
                'document_number' => null,
                'names' => 'Natalia Belén',
                'last_names' => 'Cortés Venegas',
            ],
            //Creados con DeepSeek 🤖
        ]);
    }
}
