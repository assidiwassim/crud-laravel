<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailInfoTest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $sujet;
    public $messages;
 

    public function __construct($sujet,$messages)
    {
       $this->sujet=$sujet;
       $this->messages=$messages;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       

        return $this->view('hello');
    }
}
