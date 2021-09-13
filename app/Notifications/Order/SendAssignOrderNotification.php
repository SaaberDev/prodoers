<?php

namespace App\Notifications\Order;

use App\Models\SocialLinks;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendAssignOrderNotification extends Notification
{
    use Queueable;

    private $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $social_links = SocialLinks::orderByDesc('id')->get();
        return (new MailMessage)
            ->subject('You got a new work.')
            ->view('emails.order-assign-mail', [
                'user' => $this->user,
                'social_links' => $social_links,
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'data' => [
                'user_data' => [
                    'name' => $this->user->name,
                    'username' => $this->user->username,
                    'email' => $this->user->email
                ],
                'message' => 'You were assigned to a new order.'
            ],
        ];
    }
}
