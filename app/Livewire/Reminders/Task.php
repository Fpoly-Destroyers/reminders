<?php

namespace App\Livewire\Reminders;

use App\Http\Controllers\ReminderController;
use Livewire\Component;
use App\Models\Task as ModelsTask;

class Task extends Component
{
    public $tasks;
    public $folder;
    public $slug;

    public function mount($folder, $tasks)
    {
        $this->folder = $folder;
        $this->tasks = $tasks;
    }

    public function delete($id)
    {
        $task = ModelsTask::find($id);
        $task->delete();

        $this->loadTasks();
        $this->dispatch('loadOverviews');
        // return redirect()->back()->with('success', 'Task deleted successfully');
    }

    public function loadTasks()
    {
        $this->slug = $this->folder->slug;
        $reminderController = new ReminderController();
        $response = $reminderController->folder($this->slug);

        // Assuming the view returns an array with 'folder' and 'tasks'
        $this->folder = $response->getData()['folder'];
        $this->tasks = $response->getData()['tasks'];
    }

    public function render()
    {
        return view('livewire.reminders.task');
    }
}
