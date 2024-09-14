<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
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
        for ($i = 0; $i < 100; $i++) {
            $title = $faker->unique()->word;

            Task::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'content' => $faker->paragraph(),
                'on_date' => $faker->date(),
                'on_time' => $faker->time(),
                'location' => 'Hà Nội',
                'url' => $faker->url(),
                'folder_id' => rand(1, 10),
                'status' => rand(0, 1),
                'user_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
                'deleted_at' => null,
            ]);
        }
    }
}
