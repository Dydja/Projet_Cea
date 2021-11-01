<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerMail extends Mailable
{
    use Queueable, SerializesModels;

   public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $user)
    {
         $this->data = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /**
         * emails le nom du dossier
         * le nom du fichier
         * Mail::to() qui permet d'envoyer au destinataire
         */
        return $this->from('ewemple@test.com')
            // ->to('kayeon@gmail.com')
            ->subject('Mon objet personnalisé')
        ->view('emails.Email_test');
        //->attach(public_path('images/avatar/1.jpg'));

    }
}
