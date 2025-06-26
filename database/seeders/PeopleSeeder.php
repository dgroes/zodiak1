<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $peopleMembers = [
            [
                'run' => null,
                'document_number' => 'DFOM001',
                'names' => 'Luis Fernando',
                'last_names' => 'Mendoza-Castro',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM002',
                'names' => 'Ana Patricia',
                'last_names' => 'Silva-Rojas',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM003',
                'names' => 'Carlos Andrés',
                'last_names' => 'Pizarro-López',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM004',
                'names' => 'María José',
                'last_names' => 'Contreras-Vega',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM005',
                'names' => 'Jorge Ignacio',
                'last_names' => 'Fuentes-Molina',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM006',
                'names' => 'Camila Andrea',
                'last_names' => 'Miranda-Soto',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM007',
                'names' => 'Ricardo Antonio',
                'last_names' => 'Navarro-Bravo',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM008',
                'names' => 'Valentina Paz',
                'last_names' => 'Salinas-Fernández',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM009',
                'names' => 'Diego Alejandro',
                'last_names' => 'Carvajal-Gómez',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM010',
                'names' => 'Daniela Carolina',
                'last_names' => 'Vergara-Mendoza',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM011',
                'names' => 'Pablo Sebastián',
                'last_names' => 'Aravena-Orellana',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM012',
                'names' => 'Francisca Belén',
                'last_names' => 'Cáceres-Guzmán',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM013',
                'names' => 'Miguel Ángel',
                'last_names' => 'Espinoza-Carrasco',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM014',
                'names' => 'Isidora Antonia',
                'last_names' => 'Tapia-Valdés',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM015',
                'names' => 'Juan Carlos',
                'last_names' => 'Parra-Bustamante',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM016',
                'names' => 'Catalina Andrea',
                'last_names' => 'Sepúlveda-Leiva',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM017',
                'names' => 'Roberto Javier',
                'last_names' => 'Soto-Maldonado',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM018',
                'names' => 'Amanda Rosa',
                'last_names' => 'Figueroa-Castillo',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM019',
                'names' => 'Felipe Andrés',
                'last_names' => 'Morales-San Martín',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM020',
                'names' => 'Constanza María',
                'last_names' => 'Torres-Olivares',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM021',
                'names' => 'Patricio José',
                'last_names' => 'Riquelme-González',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM022',
                'names' => 'Antonia Ignacia',
                'last_names' => 'Araya-Muñoz',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM023',
                'names' => 'Rodrigo Alonso',
                'last_names' => 'Vera-Pinto',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM024',
                'names' => 'Gabriela Alejandra',
                'last_names' => 'Cortés-Donoso',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM025',
                'names' => 'Francisco Javier',
                'last_names' => 'Olivares-Rivera',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM026',
                'names' => 'Javiera Antonia',
                'last_names' => 'Poblete-Cáceres',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM027',
                'names' => 'Mauricio Alejandro',
                'last_names' => 'Bustos-Aguayo',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM028',
                'names' => 'Paola Daniela',
                'last_names' => 'Zúñiga-Toledo',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM029',
                'names' => 'Hernán Roberto',
                'last_names' => 'Venegas-Silva',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM030',
                'names' => 'María Fernanda',
                'last_names' => 'Castro-Ríos',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM031',
                'names' => 'Sergio Antonio',
                'last_names' => 'Lagos-Pérez',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM032',
                'names' => 'Natalia Andrea',
                'last_names' => 'Vargas-Sanhueza',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM033',
                'names' => 'Arturo Manuel',
                'last_names' => 'Peña-Figueroa',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM034',
                'names' => 'Daniela Paz',
                'last_names' => 'Reyes-Núñez',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM035',
                'names' => 'Gustavo Adolfo',
                'last_names' => 'Álvarez-Sepúlveda',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM036',
                'names' => 'Macarena Valentina',
                'last_names' => 'Gómez-Orellana',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM037',
                'names' => 'Eduardo Patricio',
                'last_names' => 'Méndez-Carvajal',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM038',
                'names' => 'Valeska Ignacia',
                'last_names' => 'Flores-Gajardo',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM039',
                'names' => 'Raúl Alfonso',
                'last_names' => 'Cárdenas-Oyarzún',
            ],
            [
                'run' => null,
                'document_number' => 'DFOM040',
                'names' => 'María Pilar',
                'last_names' => 'Aguirre-Tapia',
            ],
            [
                'run' => '12345678-9',
                'document_number' => null,
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
        ];
        /* C09: Manejador de errores inteligente */
        foreach ($peopleMembers as $people) {
            try {
                Person::create($people);
                $this->command->info("[OK] People {$people['names']} creado 😃");
            } catch (\Exception $e) {
                $this->command->error("Error al crear people {$people['names']}: {$e->getMessage()}");
            }
        }
    }
}
