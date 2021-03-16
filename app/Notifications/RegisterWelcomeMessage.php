<?php

    namespace App\Notifications;

    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Notifications\Messages\MailMessage;
    use Illuminate\Notifications\Notification;

    class RegisterWelcomeMessage extends Notification implements ShouldQueue
    {
        use Queueable;

        public $social_links;
        private $user;

        /**
         * Create a new notification instance.
         *
         * @param $social_links
         * @param $user
         */
        public function __construct($social_links, $user)
        {
            $this->social_links = $social_links;
            $this->user = $user;
        }

        /**
         * Get the notification's delivery channels.
         *
         * @param mixed $notifiable
         * @return array
         */
        public function via($notifiable)
        {
            return ['mail'];
        }

        /**
         * Get the mail representation of the notification.
         *
         * @param mixed $notifiable
         * @return MailMessage
         */
        public function toMail($notifiable)
        {
            return (new MailMessage)
                ->subject('Welcome Mail')
                ->view('emails.registration_welcome_mail', [
                    'social_links' => $this->social_links,
                    'user' => $this->user,
                ]);
        }

        /**
         * Get the array representation of the notification.
         *
         * @param mixed $notifiable
         * @return array
         */
        public function toArray($notifiable)
        {
            return [
                //
            ];
        }
    }
