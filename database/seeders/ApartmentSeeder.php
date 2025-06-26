<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // dd(Owner::pluck('id'));
        $apartments = [
            [
                'owner_id' => 1,
                'tower_id' => 1,
                'number' => 201,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 2,
                'tower_id' => 1,
                'number' => 203,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 3,
                'tower_id' => 1,
                'number' => 301,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 1,
                'tower_id' => 1,
                'number' => 303,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 5,
                'tower_id' => 1,
                'number' => 401,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 6,
                'tower_id' => 1,
                'number' => 403,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 7,
                'tower_id' => 1,
                'number' => 501,
                'details' => 'Terraza privada',
                'is_available' => true
            ],
            [
                'owner_id' => 8,
                'tower_id' => 1,
                'number' => 503,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 9,
                'tower_id' => 1,
                'number' => 601,
                'details' => 'Vista al mar',
                'is_available' => true
            ],
            [
                'owner_id' => 10,
                'tower_id' => 1,
                'number' => 603,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 11,
                'tower_id' => 1,
                'number' => 701,
                'details' => '3 dormitorios, 2 baños',
                'is_available' => true
            ],
            [
                'owner_id' => 12,
                'tower_id' => 1,
                'number' => 703,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 13,
                'tower_id' => 1,
                'number' => 801,
                'details' => 'Estacionamiento incluido',
                'is_available' => true
            ],
            [
                'owner_id' => 14,
                'tower_id' => 1,
                'number' => 803,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 15,
                'tower_id' => 1,
                'number' => 901,
                'details' => 'Amueblado',
                'is_available' => true
            ],
            [
                'owner_id' => 16,
                'tower_id' => 1,
                'number' => 903,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 17,
                'tower_id' => 1,
                'number' => 1001,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 18,
                'tower_id' => 1,
                'number' => 1003,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 19,
                'tower_id' => 1,
                'number' => 1101,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 20,
                'tower_id' => 1,
                'number' => 1103,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 21,
                'tower_id' => 1,
                'number' => 1201,
                'details' =>  null,
                'is_available' => true
            ],
            [
                'owner_id' => 22,
                'tower_id' => 1,
                'number' => 1203,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 23,
                'tower_id' => 1,
                'number' => 1301,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 24,
                'tower_id' => 1,
                'number' => 1303,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 25,
                'tower_id' => 1,
                'number' => 1401,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 26,
                'tower_id' => 1,
                'number' => 1403,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 27,
                'tower_id' => 1,
                'number' => 1501,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 28,
                'tower_id' => 1,
                'number' => 1503,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 29,
                'tower_id' => 1,
                'number' => 1601,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 30,
                'tower_id' => 1,
                'number' => 1603,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 31,
                'tower_id' => 1,
                'number' => 1701,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 32,
                'tower_id' => 1,
                'number' => 1703,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 33,
                'tower_id' => 1,
                'number' => 1801,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 34,
                'tower_id' => 1,
                'number' => 1803,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 35,
                'tower_id' => 1,
                'number' => 1901,
                'details' => null,
                'is_available' => true
            ],
            [
                'owner_id' => 36,
                'tower_id' => 1,
                'number' => 1903,
                'details' => null,
                'is_available' => true
            ],

        ];

        foreach ($apartments as $apartment) {
            try {
                Apartment::create($apartment);
                $this->command->info("[OK] Apartment: {$apartment['number']} creado 🏠");
            } catch (\Exception $e) {
                $this->command->error("Error al crear {$apartment['number']} :{$e->getMessage()}");
            }
        }
    }
}
