<?php

namespace App\Livewire;

use App\Http\Requests\TaskRequest;
use App\Models\Folder;
use App\Models\Reminder;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


class AddTask extends Component
{
    use WithFileUploads;

    public $taskTitle, $taskContent, $taskFolderId, $taskOnDate, $taskOnTime, $taskReminderTime, $taskReminderUnit, $taskRepeatCount, $taskRepeatUnit, $taskEndRepeatDate, $taskLocation, $taskUrl, $taskImage;

    public $folders;

    public function mount()
    {
        $this->folders = Folder::all();
    }

    public function render()
    {
        return view('livewire.add-task');
    }

    public function addTask() {

        $user = Auth::user();

        $validatedData = Validator::make([
            'taskTitle' => $this->taskTitle,
            'taskContent' => $this->taskContent,
            'taskFolderId' => $this->taskFolderId,
            'taskOnDate' => $this->taskOnDate,
            'taskOnTime' => $this->taskOnTime,
            'taskReminderTime' => $this->taskReminderTime,
            'taskReminderUnit' => $this->taskReminderUnit,
            'taskRepeatCount' => $this->taskRepeatCount,
            'taskRepeatUnit' => $this->taskRepeatUnit,
            'taskEndRepeatDate' => $this->taskEndRepeatDate,
            'taskLocation' => $this->taskLocation,
            'taskUrl' => $this->taskUrl,
            'taskImage' => $this->taskImage,
        ], (new TaskRequest())->rules())->validate();

        $data = [
            'title' => $validatedData['taskTitle'],
            'slug' =>  Str::slug($validatedData['taskTitle']),
            'content'=> $validatedData['taskContent'],
            'on_date' => $validatedData['taskOnDate'],
            'on_time' => $validatedData['taskOnTime'],
            'location' => $validatedData['taskLocation'],
            'url' => $validatedData['taskUrl'],
            'reminder_time' => $validatedData['taskReminderTime'],
            'reminder_unit' => $validatedData['taskReminderUnit'],
            'repeat_count' => $validatedData['taskRepeatCount'],
            'repeat_unit' => $validatedData['taskRepeatUnit'],
            'end_repeat_date' => $validatedData['taskEndRepeatDate'],
            'folder_id' => $validatedData['taskFolderId'],
            'status' => 0,
            'image' => null,
            'user_id' => $user->id,
        ];

        if ($this->taskImage) {
            $img = $this->taskImage;
            $path = public_path('storage/upload/');
            $name = time() . '.' . $img->getClientOriginalExtension();
            $img->storeAs($path, $name);
            $data['image'] = $name;
        }

        $task = Task::create($data);

        if (!empty($validatedData['taskReminderTime']) && !empty($validatedData['taskReminderUnit']) && !empty($validatedData['taskRepeatCount']) && !empty($validatedData['taskRepeatUnit']) && !empty($validatedData['taskEndRepeatDate'])) {
            Reminder::create([
                'task_id' => $task->id,
                'reminder_time' => $validatedData['taskReminderTime'],
                'reminder_unit' => $validatedData['taskReminderUnit'],
                'repeat_count' => $validatedData['taskRepeatCount'],
                'repeat_unit' => $validatedData['taskRepeatUnit'],
                'end_repeat_date' => $validatedData['taskEndRepeatDate'],
            ]);
        }

        return Redirect::route('reminders.index')->with([
            'success' => 'Success',
            'message' => 'Task added successfully',
        ]);
    }
}
