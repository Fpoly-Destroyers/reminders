<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Folder extends Component
{
    public $folders;

    protected $listeners = ['folderAdded' => 'loadFolders'];

    public function __construct()
    {
        $this->loadFolders();
    }

    public function loadFolders()
    {
        $this->folders = Auth::user()->folders()->where('is_archived', 0)->orderBy('is_pinned', 'desc')->get();
    } 

    public function render()
    {
        return view('livewire.folder', [
            'folders' => $this->folders,
        ]);
    }
}
