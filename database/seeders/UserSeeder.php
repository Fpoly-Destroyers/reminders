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
                'email' => 'admin@gmail.com',
                'fullname' => 'Admin',
                'password' => Hash::make('12345678'),
                'avatar' => 'profile.png',
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'email' => 'quandh28@gmail.com',
                'fullname' => 'Đỗ Hồng Quân',
                'password' => Hash::make('12345678'),
                'avatar' => 'profile.png',
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'email' => 'hieu1@gmail.com',
                'fullname' => 'Trần Chung Hiếu',
                'password' => Hash::make('12345678'),
                'avatar' => 'profile.png',
                'is_active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'email' => 'Blackwhilee04@gmail.com',
                'fullname' => 'Lê Văn Thành',
                'password' => Hash::make('Blackwhilee04'),
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