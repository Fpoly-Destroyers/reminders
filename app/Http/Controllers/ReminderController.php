<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index()
    {
        return view('pages.reminder');
    }

    public function folder($slug)
    {
        return view('pages.reminder', compact('slug'));
    } 

    public function date($year, $month, $day)
    {    
        session()->put('selectedDate', [
            'year' => $year,
            'month' => $month,
            'day' => $day
        ]);
        return view('pages.reminder');
    }
}
