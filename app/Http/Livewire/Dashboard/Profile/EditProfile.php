<?php

namespace App\Http\Livewire\Dashboard\Profile;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditProfile extends Component
{

    public $name;
    public $email;
    public $password;
    public $confirm_password;

    public function mount()
    {
        $this->user = Auth::user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }
    public function updateInfo()
    {
        $this->validate(
            [
                'name' => 'required',
                'email' => 'required|email:filter,rfc,spoof'
            ]
        );
        $this->user->update([

            'name' => $this->name,
            'email' => $this->email,
        ]);
        $this->emit('success', 'Profile Updated Successfully');
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
        return view('livewire.dashboard.profile.edit-profile');
    }
}
