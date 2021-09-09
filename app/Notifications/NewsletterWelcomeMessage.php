<?php

namespace App\Notifications;

use App\Models\SocialLinks;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewsletterWelcomeMessage extends Notification
{
    use Queueable;

    public $subscriber;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($subscriber)
    {
        $this->subscriber = $subscriber;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        $social_links = SocialLinks::orderByDesc('id')->get();
        return (new MailMessage)
            ->subject('Welcome to Designwala Newsletter.')
            ->view('emails.newsletter_welcome_mail', [
                'subscriber' => $this->subscriber,
                'social_links' => $social_links,
            ]);
    }
}
