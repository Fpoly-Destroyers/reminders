<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class AuthFolder extends Component
{
    public $password = '';
    public $folder;

    public function mount($folder)
    {
        $this->folder = $folder;
    }

    public function unlockFolder()
    {
        if (!Hash::check($this->password, $this->folder->password)) {
            return redirect()->back()->with('error', 'Folder failed to unlock');
        }

        Session::put('is_unlocked_' . $this->folder->slug, true);

        return redirect()->back()->with('success', 'Folder unlocked');
    }

    public function render()
    {
        return view('livewire.auth-folder');
    }
}
