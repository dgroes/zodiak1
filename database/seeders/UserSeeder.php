<?php

namespace Database\Seeders;

use App\Models\User;
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
       $users = [
            [
                'staff_id' => 1,
                'name' => 'jose',
                'email' => 'joseluis@gmail.com',
                'password' => Hash::make('joseluis1234'), //Contraseña segura en la BD
                'email_verified_at' => now(),
                'remember_token' => Str::random(10), // Genera un token aleatorio
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'staff_id' => 2,
                'name' => 'diego',
                'email' => 'diego@gmail.com',
                'password' => Hash::make('diego1234'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'staff_id' => 3,
                'name' => 'kakashi',
                'email' => 'kakashi@gmail.com',
                'password' => Hash::make('kakashi1234'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($users as $user){
            try{
                User::create($user);
                $this->command->info("[OK] User: {$user['email']} creado 👨‍💻");
            } catch (\Exception $e){
                $this->command->error("Error al crear {$user['staff_id']} :{$e->getMessage()}");
            }
        }
    }
}
