<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;



class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $faker = Faker::create();
        $usedTitles = [];

        for ($i = 0; $i < 10; $i++) {
            do {
                $title = $faker->unique()->word;
            } while (in_array($title, $usedTitles));

            $usedTitles[] = $title;

            DB::table('folders')->insert([
                'title' => $title,
                'slug' => Str::slug($title),
                'color' => $faker->hexColor,
                'is_pinned' => $faker->boolean,
                'user_id' => rand(1, 4),
                'created_at' => $now,
                'updated_at' => $now,
                'deleted_at' => $now,
            ]);
        }
    }
}
