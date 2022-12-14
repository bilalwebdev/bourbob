<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $email_message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        $first_name,
        $last_name,
        $email,
        $phone,
        $message,
    ) {
        ray($message);
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->phone = $phone;
        $this->email_message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail-templates.contact-message');
    }
}
