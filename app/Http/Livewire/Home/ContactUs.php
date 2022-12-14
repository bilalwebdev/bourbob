<?php

namespace App\Http\Livewire\Home;

use App\Mail\ContactMessage;
use App\Models\EmailSettings;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

use Livewire\Component;

class ContactUs extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $message;
    public $mail_setting;

    public function mount()
    {
        $this->mail_setting = EmailSettings::first();
    }


    public function submit()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email:filter,rfc,spoof',
            'phone' => 'required',
            'message' => 'required',
        ]);

        if ($this->mail_setting) {

            if ($this->mail_setting->host) {
                config([
                    'mail.mailers.smtp.host' => $this->mail_setting->host,
                    'mail.mailers.smtp.port' => $this->mail_setting->port,
                    'mail.mailers.smtp.username' => $this->mail_setting->username,
                    'mail.mailers.smtp.password' => $this->mail_setting->password,
                    'mail.from.address' => $this->mail_setting->mail_from,
                ]);

                Mail::to($this->mail_setting->mail_to)->send(
                    new ContactMessage(
                        $this->first_name,
                        $this->last_name,
                        $this->email,
                        $this->phone,
                        $this->message,

                    )
                );
            }
        }
        $this->reset();

        Session::flash('email-success', 'Thanks for Contact!');
    }



    public function render()
    {
        return view('livewire.home.contact-us');
    }
}
