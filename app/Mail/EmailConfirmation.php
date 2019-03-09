<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $prenom;
     public $nom;
     public $email;
     public $tel;
     public $pays;
     public $address;
     public $ville;
     public $code;
     public $messages;

    public function __construct($prenom,$nom,$email,$tel,$pays,$address,$ville,$code,$messages)
    {
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->email=$email;
        $this->tel=$tel;
        $this->pays=$pays;
        $this->address=$address;
        $this->ville=$ville;
        $this->code=$code;
        $this->messages=$messages;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.confirmation');
    }
}
