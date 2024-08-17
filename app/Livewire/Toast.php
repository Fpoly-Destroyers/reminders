<?php

namespace App\Livewire;

use Livewire\Component;

class Toast extends Component
{
    public $title;
    public $message;
    public $icon;

    public $color = 'red';
    public function mount($type, $title, $message = null)
    {
        switch ($type) {
            case 'success':
                $this->color = 'green';
                $this->icon = 'check_circle';
                break;
            case 'error':
                $this->color = 'red';
                $this->icon = 'error';
                break;
            case 'warning':
                $this->color = 'yellow';
                $this->icon = 'warning';
                break;
            case 'info':
                $this->color = 'blue';
                $this->icon = 'info';
                break;
        }

        $this->title = $title;
        $this->message = $message;
    }
    public function render()
    {
        return view('livewire.toast');
    }
}
