<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class messagesent extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone_no;
    public $email;
    public $company;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$phone_no,$email, $company)
    {
        $this->name = $name;
        $this->phone_no = $phone_no;
        $this->email = $email;
        $this->company = $company;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->view('emails.notify');
                // ->from($this->lastname);
        return $email;
    }
}
