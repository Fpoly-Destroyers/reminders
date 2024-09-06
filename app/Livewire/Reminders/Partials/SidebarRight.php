<?php

namespace App\Livewire\Reminders\Partials;

use Livewire\Component;

class SidebarRight extends Component
{
    public $content = [
        'component' => 'reminders.add-folder',
        'data' => null,
    ];
    
    protected $listeners = ['editFolder' => 'editFolder', 'addFolder' => 'addFolder', 'addTask' => 'addTask'];

    public function editFolder($slug)
    { 
        $this->content = [
            'component' => 'reminders.edit-folder',
            'data' => [
                'slug' => $slug,
            ],
        ];
    }

    public function addFolder()
    {
        $this->content = [
            'component' => 'reminders.add-folder',
            'data' => null,
        ];
    }

    public function addTask() {
        $this->content = [
            'component' => 'reminders.add-task',
            'data' => null,
        ];
    }

    public function render()
    {
        return view('livewire.reminders.partials.sidebar-right', [
            'content' => $this->content,
        ]);
    }
}
