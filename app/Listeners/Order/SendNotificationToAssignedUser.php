<?php

    namespace App\Listeners\Order;

    use App\Events\Order\AssignOrderEvent;
    use App\Notifications\Order\SendAssignOrderNotification;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Queue\InteractsWithQueue;
    use Notification;

    class SendNotificationToAssignedUser implements ShouldQueue
    {
        use InteractsWithQueue;

        public $afterCommit = true;
        public $delay = 5;

        /**
         * Handle the event.
         *
         * @param AssignOrderEvent $event
         * @return void
         */
        public function handle(AssignOrderEvent $event)
        {
            Notification::send($event->user, new SendAssignOrderNotification($event->user));
        }
    }
