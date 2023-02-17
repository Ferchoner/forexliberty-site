<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormUser extends Mailable
{
    use Queueable, SerializesModels;

    public $full_name;
    public $phone;
    public $email;
    public $form_subject;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data = [])
    {
        $this->full_name = $data['full_name'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->form_subject = $data['subject'] ?? null;
        $this->message = $data['message'] ?? null;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('contacto@colin-cordoba.com.mx', 'Colin & Córdoba')
            ->subject('Muchas gracias por ponerte en contacto')
            ->view('mails.contact-user');
    }
}
