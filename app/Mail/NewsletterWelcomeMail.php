<?php

namespace App\Mail;

use App\Models\SocialLinks;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterWelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $social_links;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->social_links = SocialLinks::orderByIdDesc()->get();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Welcome to Designwala Newsletter')
            ->from('info@designwala.net')
            ->view('emails.newsletter_welcome_mail');
    }
}
