<?php

namespace App\Livewire\Reminders\Partials;

use Livewire\Component;

class Main extends Component
{
    public $folder;
    public $tasks;

    public function mount($folder, $tasks)
    {
        $this->folder = $folder;
        $this->tasks = $tasks;
    }

    public function addTask()
    {
        $this->dispatch('addTask');
    }

    public function render()
    {
        return view('livewire.reminders.partials.main');
    }
}
