<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\EmailSettings;

use Livewire\Component;

class EmailSetting extends Component
{
    public $email;

    protected $rules = [
        'email.host' => 'required',
        'email.port' => 'required',
        'email.username' => 'required',
        'email.password' => 'required',
        'email.encryption' => 'required',
        'email.mail_from' => 'required',
        'email.mail_to' => 'required',
    ];

    public function mount()
    {
        $email = EmailSettings::first();

        $this->email = $email ? $email : EmailSettings::create();
    }

    public function saveSetting()
    {
        $this->validate();
        $this->email->update();

        $this->emit('success', 'Setting Saved');
    }

    public function render()
    {
        return view('livewire.dashboard.email-setting');
    }
}
