<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('towers')->insert([
            'name' => 'Torre Sur',
            'address' => 'Calle Falsa 123',
            'leader_id' => 1, // Asumiendo que el líder con ID 1 ya existe
        ]);
    }
}
