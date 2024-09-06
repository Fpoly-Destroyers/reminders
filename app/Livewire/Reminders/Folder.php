<?php

namespace App\Livewire\Reminders;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Folder extends Component
{
    public $folders;
    public $currentPath;

    protected $listeners = ['loadFolders' => 'loadFolders'];

    public function mount()
    {
        $this->loadFolders();
        $this->currentPath = request()->path();
    }

    public function isActive($linkPath)
    {
        $linkPath = ltrim(parse_url($linkPath, PHP_URL_PATH), '/');
        return $this->currentPath === $linkPath;
    }

    public function loadFolders()
    {
        $this->folders = Auth::user()->folders()->orderBy('is_pinned', 'desc')->get();
    }

    public function pinFolder($slug)
    {
        $folder = Auth::user()->folders()->where('slug', $slug)->first();
        $folder->is_pinned = !$folder->is_pinned;
        $folder->save();
        $this->loadFolders();
        $this->dispatch('loadOverviews');
    }

    public function deleteFolder($slug)
    { 
        $folder = Auth::user()->folders()->where('slug', $slug)->first();
        $folder->delete();
        $this->loadFolders();
    }

    public function editFolder($slug)
    {
        $this->dispatch('editFolder', $slug);
    }

    public function addFolder()
    {
        $this->dispatch('addFolder');
    }

    public function render()
    {
        return view('livewire.reminders.folder', [
            'folders' => $this->folders,
        ]);
    }
}
