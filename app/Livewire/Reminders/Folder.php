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
        if ($folder->save()) {
            $this->loadFolders();
            $this->dispatch('flashMessage', 'success', 'Success', 'Folder archived successfully.');
            $this->dispatch('loadOverviews');
        } else {
            $this->dispatch('flashMessage', 'error', 'Error', 'Failed to archive folder.');
        }
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
