<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $fillable = [
        "task_id",
        "reminder_time",
        "reminder_unit",
        "repeat_count",
        'repeat_unit',
        "end_repeat_date",
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

}
