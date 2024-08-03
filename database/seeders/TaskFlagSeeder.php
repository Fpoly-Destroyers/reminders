<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskFlagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        for ($i=0; $i < 10; $i++) {
            DB::table('task_flag')->insert(
                [
                    'task_id' => rand(1,10),
                    'flag_id' => rand(1,10),
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            );
        }
    }
}
