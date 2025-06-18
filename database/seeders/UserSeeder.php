<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'staff_id' => 1,
                'email' => 'joseluis@gmail.com',
                'password' => Hash::make('joseluis1234'), //Contraseña segura en la BD
                'remember_token' => Str::random(10), // Genera un token aleatorio
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'staff_id' => 2,
                'email' => 'diego@gmail.com',
                'password' => Hash::make('diego1234'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'staff_id' => 3,
                'email' => 'kakashi@gmail.com',
                'password' => Hash::make('kakashi1234'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
