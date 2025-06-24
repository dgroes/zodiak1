<?php

namespace Database\Seeders;

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
                'person_id' => 1,
                'medical_disabilities' => 'Ninguna',
            ],
            [
                'person_id' => 2,
                'medical_disabilities' => 'Diabetes',
            ],
            [
                'person_id' => 3,
                'medical_disabilities' => 'Hipertensión',
            ],
            [
                'person_id' => 4,
                'medical_disabilities' => 'Ninguna',
            ],
            [
                'person_id' => 5,
                'medical_disabilities' => 'Asma',
            ],
            [
                'person_id' => 6,
                'medical_disabilities' => 'Ninguna',
            ],
            [
                'person_id' => 7,
                'medical_disabilities' => 'Alergia al polen',
            ],
            [
                'person_id' => 8,
                'medical_disabilities' => 'Ninguna',
            ],
            [
                'person_id' => 9,
                'medical_disabilities' => 'Epilepsia',
            ],
            [
                'person_id' => 10,
                'medical_disabilities' => 'Ninguna',
            ]

        ];


        foreach ($residentMembers as $resident) {
            \App\Models\Resident::create([
                'person_id' => $resident['person_id'],
                'medical_disabilities' => $resident['medical_disabilities'],
            ]);
        }
    }
}
