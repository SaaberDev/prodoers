<?php

    namespace App\Listeners\Newsletter;

    use App\Events\Newsletter\NewsletterEvent;
    use App\Notifications\NewsletterWelcomeMessage;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Queue\InteractsWithQueue;
    use Notification;

    class SendNewsletterWelcomeNotification implements ShouldQueue
    {
        use InteractsWithQueue;

        public $afterCommit = true;
        public $delay = 5;

        /**
         * Handle the event.
         *
         * @return void
         */
        public function handle(NewsletterEvent $event)
        {
            Notification::send($event->subscriber,
                new NewsletterWelcomeMessage($event->subscriber)
            );
        }
    }
