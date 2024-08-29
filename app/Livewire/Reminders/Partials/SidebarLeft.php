<?php

namespace App\Livewire\Reminders\Partials;

use Livewire\Component;

class SidebarLeft extends Component
{
    public $currentPath;

    public function mount()
    {
        $this->currentPath = request()->path();
        $this->dispatch('sidebarleft-event');
    }

    public function isActive($linkPath)
    {
        return $this->currentPath === $linkPath;
    }


    public function render()
    {
        return view('livewire.reminders.partials.sidebar-left');
    }
}
