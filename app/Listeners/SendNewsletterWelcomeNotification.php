<?php

    namespace App\Listeners;

    use App\Events\Newsletter;
    use App\Notifications\NewsletterWelcomeMessage;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Queue\InteractsWithQueue;
    use Illuminate\Support\Facades\Auth;
    use Notification;

    class SendNewsletterWelcomeNotification implements ShouldQueue
    {
        use InteractsWithQueue;

        public $afterCommit = true;

        /**
         * Handle the event.
         *
         * @return void
         */
        public function handle(Newsletter $newsletter)
        {
//            $newsletter->subscriber->notify(new NewsletterWelcomeMessage($newsletter));
//            dd($newsletter->subscriber);
            Notification::send($newsletter->subscriber,
                new NewsletterWelcomeMessage($newsletter)
            );
        }
    }
