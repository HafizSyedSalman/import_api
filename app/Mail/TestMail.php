<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Mail\TestMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name= $this->data['name'];
        $to= $this->data['to'];
        $subject= $this->data['subject'];
        $message= $this->data['message'];
        return $this->subject($this->data['subject'])
        ->view('mail.sendEmail', compact('name'))
        ->message($this->data('message')->getRealPath(),[
            'as'=>$this->data['message']->getClientOriginalName()
        ]);
    }
}
