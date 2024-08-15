<?php

namespace App\Livewire;

use Livewire\Component;

class AddList extends Component
{
    public $colors;
    public $color = '#4285F4';
    public $title;
    public $customColor;
    public $is_pinned = false;

    public function __construct()
    {
        $this->colors = [
            '#AD1457',
            '#F4511E',
            '#E4C441',
            '#0B8043',
            '#3F51B5',
            '#8E24AA',
            '#D81B60',
            '#EF6C00',
            '#C0CA33',
            '#009688',
            '#7986CB',
            '#795548',
            '#D50000',
            '#F09300',
            '#7CB342',
            '#039BE5',
            '#B39DDB',
            '#616161',
            '#E67C73',
            '#F6BF26',
            '#33B679',
            '#4285F4',
            '#9E69AF',
            '#A79B8E',
        ];
    }

    public function setColor($hex) {
        $this->color = $hex;
    }

    public function submit() {
        dd($this->color);   
    }

    public function render()
    {
        return view('livewire.add-list', ['colors' => $this->colors]);
    }
}
