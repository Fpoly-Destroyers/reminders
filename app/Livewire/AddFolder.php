<?php

namespace App\Livewire;

use App\Models\Folder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AddFolder extends Component
{
    public $colors;
    public $color = '#4285F4';
    public $title;
    public $slug;
    public $password;
    public $customColor;
    public $is_pinned = false;

    public function mount()
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

    protected $rules = [
        'title' => 'required',
    ];

    protected $messages = [
        'title.required' => 'The title field is required.',
    ];

    public function setColor($hex)
    {
        $this->color = $hex;
    }

    public function submit()
    {
        $this->validate();
        $user = Auth::user();
        $data = [
            'title' => $this->title,
            'slug' => createSlug($this->title),
            'is_archived' => 0,
            'password' => empty($this->password) ? null : Hash::make($this->password),
            'color' => $this->color,
            'is_pinned' => $this->is_pinned,
            'user_id' => $user->id,
        ];

        if (Folder::create($data)) {
            session()->flash('message', 'Folder created successfully!');
            $this->reset(['title', 'slug', 'password', 'color', 'is_pinned', 'customColor']);
            $this->dispatch('folderAdded');
        }
    }

    public function render()
    {
        return view('livewire.add-folder', ['colors' => $this->colors]);
    }
}
