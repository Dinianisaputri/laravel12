<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin Utama',
                'email' => 'admin2@test.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'Admin Helper',
                'email' => 'admin3@test.com', 
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'Warga Lamongan 1',
                'email' => 'warga1@test.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Warga Lamongan 2',
                'email' => 'warga2@test.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Reporter Aktif',
                'email' => 'reporter@test.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
        ];

        foreach ($users as $userData) {
            User::firstOrCreate(
                ['email' => $userData['email']],
                $userData
            );
        }
    }
}

