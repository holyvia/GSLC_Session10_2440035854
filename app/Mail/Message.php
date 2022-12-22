<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Message extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $token;
    public $link;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $token, $link)
    {
        $this->email = $email;
        $this->token = $token;
        $this->link = $link;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Reset Password')
        ->markdown('emails.message');
    }
}
