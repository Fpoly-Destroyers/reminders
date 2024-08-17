<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index() {
        return view('pages.reminders.index');
    }

    public function list($slug) {
        return view('pages.reminders.index');
    }

    public function date($year, $month, $day) {
        return view('pages.reminders.index');
    }
}
