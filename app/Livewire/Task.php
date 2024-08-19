<?php

namespace App\Livewire;

use App\Models\Task as ModelsTask;
use Livewire\Component;

class Task extends Component
{
    public $tasks;

    public function mount($tasks)
    {
        $this->tasks = $tasks;
    }

    public function delete($id)
    {
        $task = ModelsTask::find($id);
        $task->delete();
        
        return redirect()->back()->with('success', 'Task deleted successfully');
    }

    public function render()
    {
        return view('livewire.task', [
            'tasks' => $this->tasks,
        ]);
    }
}
