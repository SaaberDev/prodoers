<?php

    namespace App\Listeners;

    use App\Events\Newsletter;
    use App\Notifications\NewsletterWelcomeMessage;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Queue\InteractsWithQueue;
    use Illuminate\Support\Facades\Auth;
    use Notification;

    class SendNewsletterWelcomeNotification
    {
        /**
         * Handle the event.
         *
         * @param $event
         * @return void
         */
        public function handle($event)
        {
            Notification::send($event,
                new NewsletterWelcomeMessage($event)
            );
        }
    }
