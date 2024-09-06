<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'on_date',
        'on_time',
        'location',
        'url',
        'image',
        'folder_id',
        'status',
        'user_id',
    ];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }

    public function reminders()
    {
        return $this->hasMany(Reminder::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
