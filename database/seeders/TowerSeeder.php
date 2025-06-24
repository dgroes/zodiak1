<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tower;

class TowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $towers = [
            [
            'name' => 'Torre Sur',
            'address' => 'Miguel Juarez 730',
            'leader_id' => 1, // Asumiendo que el líder con ID 1 ya existe
            ],
            [
            'name' => 'Torre Norte',
            'address' => 'Miguel Juarez 780',
            'leader_id' => 2, // Asumiendo que el líder con ID 2 ya existe
            ],

        ];

        foreach ($towers as $tower){
            Tower::create([
                'name' => $tower['name'],
                'address' => $tower['address'],
                'leader_id' => $tower['leader_id'],
            ]);
        }


    }
}
