<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;



class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $now = now();
        for ($i=0; $i < 10; $i++) {
            $title = $faker->unique()->word;

            DB::table('tasks')->insert([
                'title' => $title,
                'slug' => Str::slug($title),
                'content' => $faker->paragraph(),
                'on_date' => $faker->date(),
                'on_time' => $faker->time(),
                'location' => 'Hà Nội',
                'url' => $faker->url(),
                'list_id' => rand(1,10),
                'status' => rand(0,1),
                'created_at' => $now,
                'updated_at' => $now,
                'deleted_at' => $now,
            ]);
        }
    }
}
