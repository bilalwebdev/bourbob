<?php

namespace App\Http\Livewire\Dashboard\Profile;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditPassword extends Component
{
    public $password;
    public $confirm_password;


    public function mount()
    {
        $this->user = Auth::user();
    }

    public function updatePassword()
    {
        $this->validate([
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        $this->user->update([
            'password' => bcrypt($this->password),
        ]);

        $this->emit('success', 'Password Updated Succesfully');

    }
    public function render()
    {
        return view('livewire.dashboard.profile.edit-password');
    }
}
