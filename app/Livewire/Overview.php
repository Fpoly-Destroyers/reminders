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

    protected $listeners = ['loadOverviews' => 'loadOverviews'];

    public function __construct()
    {
        $this->today = Auth::user()->tasks()->whereDate('on_date', now()->format('Y-m-d'))->count();
        $this->archived = Auth::user()->folders()->where('is_archived', 1)->count();
        $this->all = Auth::user()->tasks()->count();
        $this->trashed = Auth::user()->tasks()->onlyTrashed()->count();
    }

    public function loadOverviews()
    {
        $this->today = Auth::user()->tasks()->whereDate('on_date', now()->format('Y-m-d'))->count();
        $this->archived = Auth::user()->folders()->where('is_archived', 1)->count();
        $this->all = Auth::user()->tasks()->count();
        $this->trashed = Auth::user()->tasks()->onlyTrashed()->count();
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
