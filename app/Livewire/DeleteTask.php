<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteTask extends Component
{
    public $task;
    public function mount($task)
    {
        $this->task = $task;
    }

    public function delete()
    {
        dd($this->task);
        // $this->task->delete();

        // $this->dispatch('taskDeleted');
    }

    public function render()
    {
        return view('livewire.delete-task');
    }
}
