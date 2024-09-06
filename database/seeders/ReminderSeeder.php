<?php

namespace Database\Seeders;

use App\Enums\ReminderUnit;
use App\Enums\RepeatUnit;
use App\Models\Reminder;
use Illuminate\Database\Seeder;

class ReminderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $now = now();
        $reminder_units = ReminderUnit::cases();
        $repeat_units = RepeatUnit::cases();
        for ($i = 0; $i < 100; $i++) {
            $reminder_unit = $reminder_units[array_rand($reminder_units)]->value;
            $repeat_unit = $repeat_units[array_rand($repeat_units)]->value;
            Reminder::create([
                'task_id' => rand(1, 10),
                'reminder_time' => rand(1, 10),
                'reminder_unit' => $reminder_unit,
                'repeat_count' => rand(1, 10),
                'repeat_unit' => $repeat_unit,
                'end_repeat_date' => $now->addDays(rand(1, 10)),
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
