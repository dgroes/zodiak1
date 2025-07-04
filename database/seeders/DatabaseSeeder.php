<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            PeopleSeeder::class,
            StaffSeeder::class,
            UserSeeder::class,
            TowerSeeder::class,
            OwnerSeeder::class,
            ApartmentSeeder::class,
            ResidentSeeder::class,
            ExternalWorkerSeeder::class,
        ]);
    }
}
