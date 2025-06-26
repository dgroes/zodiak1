<?php

namespace Database\Seeders;

use App\Models\Resident;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $residentMembers = [
            [
                'run' => null,
                'document_number' => 'DRRM001',
                'names' => 'Horacio Felipe',
                'last_names' => 'Gutierritos',
                'apartment_id' => 1,
                'medical_disabilities' => 'Ninguna',
            ],
            [
                'run' => null,
                'document_number' => 'DRRM002',
                'names' => 'Carmen Lucía',
                'last_names' => 'Zaldívar',
                'apartment_id' => 1,
                'medical_disabilities' => 'Diabetes',
            ],
            [
                'run' => null,
                'document_number' => 'DRRM003',
                'names' => 'Juan Pablo Andrés',
                'last_names' => 'Courtois',
                'apartment_id' => 2,
                'medical_disabilities' => 'Hipertensión',
            ],
            [
                'run' => null,
                'document_number' => 'DRRM004',
                'names' => 'María del Pilar Rosa',
                'last_names' => 'Courtois',
                'apartment_id' => 2,
                'medical_disabilities' => 'Ninguna',
            ],
            [
                'run' => null,
                'document_number' => 'DRRM005',
                'names' => 'María Teresa Isabel',
                'last_names' => 'Leónidas',
                'apartment_id' => 3,
                'medical_disabilities' => 'Asma',
            ],
            [
                'run' => null,
                'document_number' => 'DRRM006',
                'names' => 'Bernardita Margarita',
                'last_names' => 'Lirano',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna',
            ],
            [
                'run' => null,
                'document_number' => 'DRRM007',
                'names' => 'Adriana Patricia',
                'last_names' => 'Vidales',
                'apartment_id' => 5,
                'medical_disabilities' => 'Alergia al polen',
            ],
            [
                'run' => null,
                'document_number' => 'DRRM008',
                'names' => 'Marcos Antonio',
                'last_names' => 'Bronston',
                'apartment_id' => 6,
                'medical_disabilities' => 'Ninguna',
            ],
            [
                'run' => null,
                'document_number' => 'DRRM009',
                'names' => 'Ana Victoria',
                'last_names' => 'Honeyford',
                'apartment_id' => 7,
                'medical_disabilities' => 'Epilepsia',
            ],
            [
                'run' => null,
                'document_number' => 'DRRM010',
                'names' => 'Gianina Paulina',
                'last_names' => 'Suárez-Mendoza',
                'apartment_id' => 7,
                'medical_disabilities' => 'Ninguna',
            ],
            [
                'run' => null,
                'document_number' => 'DRRM011',
                'names' => 'Diego Alejandro',
                'last_names' => 'Solís',
                'apartment_id' => 1,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM012',
                'names' => 'Maria Judith Carolina',
                'last_names' => 'Undurrino',
                'apartment_id' => 1,
                'medical_disabilities' => 'Hipertensión'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM013',
                'names' => 'Victor Manuel',
                'last_names' => 'Corriónes',
                'apartment_id' => 2,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM014',
                'names' => 'Maureen Elizabeth',
                'last_names' => 'Raboni',
                'apartment_id' => 3,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM015',
                'names' => 'Miguel Ángel',
                'last_names' => 'Cuevas',
                'apartment_id' => 4,
                'medical_disabilities' => 'Diabetes tipo 2'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM016',
                'names' => 'Tania Marcela',
                'last_names' => 'Bolados',
                'apartment_id' => 5,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM017',
                'names' => 'Gladys Beatriz',
                'last_names' => 'Helder',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM018',
                'names' => 'Victor Hugo',
                'last_names' => 'Abudinen',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM019',
                'names' => 'Roberto Carlos',
                'last_names' => 'Larraín-Sanfuentes',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM020',
                'names' => 'Pía Francisca',
                'last_names' => 'Cárdenas-Valdés',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM021',
                'names' => 'Sandra Alejandra',
                'last_names' => 'Figueroa-Toro',
                'apartment_id' => 4,
                'medical_disabilities' => 'Artritis'
            ],
            [
                 'run' => null,
                'document_number' => 'DRRM022',
                'names' => 'Luis Fernando',
                'last_names' => 'Hidalgo-Castro',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                 'run' => null,
                'document_number' => 'DRRM023',
                'names' => 'Rodica Elena',
                'last_names' => 'Noé',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
               'run' => null,
                'document_number' => 'DRRM024',
                'names' => 'Marcelo Ignacio',
                'last_names' => 'Abuawad-Salame',
                'apartment_id' => 4,
                'medical_disabilities' => 'Alergia a los mariscos'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM026',
                'names' => 'Rodrigo Javier',
                'last_names' => 'García-Lorca',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
               'run' => null,
                'document_number' => 'DRRM027',
                'names' => 'Constanza Andrea',
                'last_names' => 'Ozpinza',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM028',
                'names' => 'Jose Miguel',
                'last_names' => 'Campo',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                 'run' => null,
                'document_number' => 'DRRM029',
                'names' => 'Mónica Patricia',
                'last_names' => 'Varaz',
                'apartment_id' => 4,
                'medical_disabilities' => 'Migrañas'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM030',
                'names' => 'Carmen Gloria',
                'last_names' => 'Greco-Romano',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                  'run' => null,
                'document_number' => 'DRRM031',
                'names' => 'Mario Alberto',
                'last_names' => 'Gómez-López',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                 'run' => null,
                'document_number' => 'DRRM032',
                'names' => 'Jorge Luis',
                'last_names' => 'Dawaveh',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                 'run' => null,
                'document_number' => 'DRRM033',
                'names' => 'Jeannette Marie',
                'last_names' => 'Fescandón',
                'apartment_id' => 4,
                'medical_disabilities' => 'Problemas de tiroides'
            ],
            [
               'run' => null,
                'document_number' => 'DRRM034',
                'names' => 'Naghmeh Yasmin',
                'last_names' => 'Vahdati',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                 'run' => null,
                'document_number' => 'DRRM035',
                'names' => 'Fernando José',
                'last_names' => 'Rehbein-Stahl',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM036',
                'names' => 'Rosa Amelia',
                'last_names' => 'Paladín',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
               'run' => null,
                'document_number' => 'DRRM037',
                'names' => 'Patricio Juan',
                'last_names' => 'Sáenz',
                'apartment_id' => 4,
                'medical_disabilities' => 'Colesterol alto'
            ],
            [
                 'run' => null,
                'document_number' => 'DRRM038',
                'names' => 'Brenda Carolina',
                'last_names' => 'Álvarez-Molina',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM039',
                'names' => 'Ana María',
                'last_names' => 'Ginsburg',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM040',
                'names' => 'José Antonio',
                'last_names' => 'Jará',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM041',
                'names' => 'Devora Raquel',
                'last_names' => 'Rosenbaum',
                'apartment_id' => 4,
                'medical_disabilities' => 'Alergia a los frutos secos'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM042',
                'names' => 'Mario Enrique',
                'last_names' => 'Sáenz',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM043',
                'names' => 'Maria Elena',
                'last_names' => 'Elquete',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM044',
                'names' => 'Luis Alberto',
                'last_names' => 'Maulén',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM045',
                'names' => 'Matilde Rosa',
                'last_names' => 'Alcalá',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM046',
                'names' => 'Mónica Gabriela',
                'last_names' => 'Martí',
                'apartment_id' => 4,
                'medical_disabilities' => 'Asma'
            ],
            [
               'run' => null,
                'document_number' => 'DRRM047',
                'names' => 'María José',
                'last_names' => 'Garibaldi-Rossi',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                 'run' => null,
                'document_number' => 'DRRM048',
                'names' => 'Daniel Arturo',
                'last_names' => 'Aranolfi',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
               'run' => null,
                'document_number' => 'DRRM049',
                'names' => 'Marcela Andrea',
                'last_names' => 'Soto-Morales',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM050',
                'names' => 'Samira Patricia',
                'last_names' => 'Bahna-Saleh',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                 'run' => null,
                'document_number' => 'DRRM051',
                'names' => 'Jürgen Klaus',
                'last_names' => 'Leinbrandt-Müller',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [

                'run' => null,
                'document_number' => 'DRRM052',
                'names' => 'Norma Inés',
                'last_names' => 'Stangel',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM053',
                'names' => 'Florence Anne',
                'last_names' => 'Hudson-Bay',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
            [
                'run' => null,
                'document_number' => 'DRRM054',
                'names' => 'Pepi Raquel',
                'last_names' => 'Tobías',
                'apartment_id' => 4,
                'medical_disabilities' => 'Ninguna'
            ],
        ];


        foreach ($residentMembers as $resident) {
            try{
                $identifier = $resident['run'] ?? $resident['document_number'] ?? 'sin identificación';
                Resident::create($resident);
                $this->command->info("[OK] Resident: {$resident['names']} {$identifier} creado 👨‍👩‍👦‍👦");
            } catch (\Exception $e){
                $this->command->error("[ERROR] No se pudo crear el resdiente: {$identifier}: {$e->getMessage()} 💀");
            }
        }
    }
}
