<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use stdClass;

class ReminderController extends Controller
{
    public function index()
    {
        return view('pages.reminders.index');
    }

    //     return view('pages.reminder', compact('slug'));
    public function folder($slug)
    {
        $user = Auth::user();
        $tasks = collect();
        $folder = new stdClass();

        switch ($slug) {
            case 'today':
                $tasks = $user->tasks()
                    ->where('on_date', now()->toDateString())
                    ->orderBy('on_date', 'desc')
                    ->get();
                $folder->title = 'Today';
                $folder->slug = 'Today';
                $folder->count = $tasks->count();
                break;

            case 'all':
                $tasks = $user->tasks()
                    ->orderBy('on_date', 'desc')
                    ->get();
                $folder->title = 'All';
                $folder->slug = 'all';
                $folder->count = $tasks->count();
                break; 

            case 'trashed':
                $folder->title = 'Trashed';
                $tasks = $user->tasks()
                    ->orderBy('on_date', 'desc')
                    ->onlyTrashed()
                    ->get();
                $folder->slug = 'all';
                $folder->count = $tasks->count();
                break;

            default:
                $tasks = $user->tasks()
                    ->where('folders.slug', $slug)
                    ->orderBy('on_date', 'desc')
                    ->get();

                $folder = $user->folders()->where('folders.slug', $slug)->first();
                if ($folder) {
                    $folder->count = $tasks->count();
                }
                break;
        }

        return view('pages.reminder', [
            'folder' => $folder,
            'tasks' => $tasks,
        ]); 
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
