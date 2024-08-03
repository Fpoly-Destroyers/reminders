<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
            DB::table('users')->insert(
            [
                [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'fullname' => 'Admin',
                'password' => Hash::make('12345678'),
                'created_at' => $now,
                'updated_at' => $now,
                ],
                [
                'username' => 'quandh28',
                'email' => 'quandh28@gmail.com',
                'fullname' => 'Đỗ Hồng Quân',
                'password' => Hash::make('12345678'),
                'created_at' => $now,
                'updated_at' => $now,
                ],
                [
                'username' => 'hieu1',
                'email' => 'hieu1@gmail.com',
                'fullname' => 'Trần Chung Hiếu',
                'password' => Hash::make('12345678'),
                'created_at' => $now,
                'updated_at' => $now,
                ],
                [
                'username' => 'thanh1',
                'email' => 'thanh@gmail.com',
                'fullname' => 'Lê Văn Thành',
                'password' => Hash::make('12345678'),
                'created_at' => $now,
                'updated_at' => $now,
                ],
            ]
        );
    }
}
