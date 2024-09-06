<?php

namespace App\Livewire\Reminders;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Overview extends Component
{
    public $today; 
    public $all;
    public $trashed;
    public $currentPath;

    protected $listeners = ['loadOverviews' => 'loadOverviews'];

    public function mount()
    {
        $this->loadOverviews();
        $this->currentPath = request()->path();
    }

    public function isActive($linkPath)
    {
        $linkPath = ltrim(parse_url($linkPath, PHP_URL_PATH), '/');
        return $this->currentPath === $linkPath;
    }

    public function loadOverviews()
    {
        $this->today = Auth::user()->tasks()->whereDate('on_date', now()->format('Y-m-d'))->count();
        $this->all = Auth::user()->tasks()->count();
        $this->trashed = Auth::user()->tasks()->onlyTrashed()->count();
    }

    public function render()
    {
        return view('livewire.reminders.overview', [
            'today' => $this->today,
            'all' => $this->all,
            'trashed' => $this->trashed,
        ]);
    }
}
