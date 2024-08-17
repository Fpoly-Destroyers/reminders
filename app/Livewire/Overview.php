<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Overview extends Component
{
    public $today;
    public $archived;
    public $all;
    public $trashed;

    public function __construct()
    {
        $user = Auth::user();  
        $this->today = $user->tasks()->whereDate('on_date', now()->format('Y-m-d'))->count();
        $this->archived = $user->folders()->where('is_archived', 1)->count();
        $this->all = $user->tasks()->count();
        $this->trashed = $user->tasks()->onlyTrashed()->count();

    }

    public function render()
    {
        return view('livewire.overview', [
            'today' => $this->today,
            'archived' => $this->archived,
            'all' => $this->all,
            'trashed' => $this->trashed,
        ]);
    }
}
