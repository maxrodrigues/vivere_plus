<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $attributes)
    {
        $this->subject = $attributes['subject'];
        $this->name = $attributes['name'];
        $this->mail_message = $attributes['message'];
        $this->email = $attributes['email'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.contact')
        ->subject($this->subject)
        ->with([
            'name' => $this->name,
            'subject' => $this->subject,
            'mail_message' => $this->mail_message,
            'email' => $this->email
        ]);;
    }
}
