<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $users = [
            [
                'email' => 'Testuser@gmail.com',
                'fullname' => 'Test User',
                'password' => Hash::make('Testuser@gmail.com'),
                'avatar' => 'profile.png',
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}