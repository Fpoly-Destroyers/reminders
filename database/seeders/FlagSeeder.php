<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class FlagSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $faker = Faker::create();
        for ($i=0; $i < 10; $i++) {
            $title = $faker->unique()->word;
            DB::table('flags')->insert([
                'title' => $title,
                'slug' => Str::slug($title),
                'color' => $faker->hexColor(),
                'user_id' => rand(1,4),
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
