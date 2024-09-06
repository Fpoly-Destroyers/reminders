<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index()
    {
        return view('pages.reminders.index');
    }

    public function folder($slug)
    {
        return view('pages.reminders.index', compact('slug'));
    }

    public function edit($slug)
    {
        return view('pages.reminders.index', compact('slug'));
    }

    public function date($year, $month, $day)
    {
        return view('pages.reminders.index', compact('year', 'month', 'day'));
    }
}
