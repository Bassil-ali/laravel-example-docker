<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       return $this->to('baselali337@gmail.com')
                    ->subject('Client Email')
                    ->markdown('mail');
    }
}
