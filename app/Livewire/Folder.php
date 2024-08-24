<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Folder extends Component
{
    public $folders;

    protected $listeners = ['loadFolders' => 'loadFolders'];

    public function __construct()
    {
        $this->loadFolders();
    }

    public function loadFolders()
    {
        $this->folders = Auth::user()->folders()->where('is_archived', 0)->orderBy('is_pinned', 'desc')->get();
    }

    public function pin($slug)
    {
        $folder = Auth::user()->folders()->where('slug', $slug)->first();
        $folder->is_pinned = !$folder->is_pinned;
        $folder->save();
        $this->loadFolders();
    }

    public function archive($slug)
    {
        $folder = Auth::user()->folders()->where('slug', $slug)->first();
        $folder->is_archived = 1;
        $folder->save();
        $this->loadFolders();
        $this->dispatch('loadOverviews');
    }

    public function render()
    {
        return view('livewire.folder', [
            'folders' => $this->folders,
        ]);
    }
}
