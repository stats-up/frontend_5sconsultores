<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailStructure extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "";
    public $msg = "";

    public function __construct($titulo,$mensaje)
    {
        $this->subject = $titulo;
        $this->msg = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.plantilla');
    }
}
