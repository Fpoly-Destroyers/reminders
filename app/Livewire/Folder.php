<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Folder extends Component
{
    public $folders;
 
    public function render()
    {  
        $user = Auth::user();
        // No archived folders and sort by is_pinned
        $this->folders = $user->folders()->where('is_archived', 0)->orderBy('is_pinned', 'desc')->get();
        return view('livewire.folder', [
            'folders' => $this->folders,
        ]);
    }
}
