<?php

namespace App\Livewire;

use Livewire\Component;
use SebastianBergmann\CodeUnit\FunctionUnit;

class Toast extends Component
{
    public $type, $title, $message;
    public $icon, $textColor, $bgColor;

    protected $listeners = ['flashMessage'];

    public function flashMessage($type, $title, $message)
    {
        $this->type = $type;
        $this->title = $title;
        $this->message = $message;
        [$this->textColor, $this->bgColor, $this->icon] = $this->getColorAndIcon();
    } 

    public function getColorAndIcon()
    {
        switch ($this->type) {
            case 'success':
                $textColor = '#22C55E';
                $bgColor = '#DCFCE7';
                $icon = 'check_circle';
                break;
            case 'error':
                $textColor = '#EF4444';
                $bgColor = '#FDE2E2';
                $icon = 'error';
                break;
            case 'warning':
                $textColor = '#EAB308';
                $bgColor = '#FEF9C3';
                $icon = 'warning';
                break;
            case 'info':
                $textColor = '#3B82F6';
                $bgColor = '#DBEAFE';
                $icon = 'info';
                break;
        }

        return [$textColor, $bgColor, $icon];
    }

    public function render()
    {
        return view('livewire.toast');
    }
}
