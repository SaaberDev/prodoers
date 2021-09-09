<?php

    namespace App\Providers;

    use App\Events\Newsletter\NewsletterEvent;
    use App\Events\Order\AssignOrderEvent;
    use App\Listeners\Auth\SendRegisterWelcomeNotification;
    use App\Listeners\Auth\SendVerificationNotification;
    use App\Listeners\Newsletter\SendNewsletterWelcomeNotification;
    use App\Listeners\Order\SendNotificationToAssignedUser;
    use App\Models\AssignOrder;
    use App\Observers\Admin\Order\AssignOrderObserver;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Auth\Events\Verified;
    use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

    class EventServiceProvider extends ServiceProvider
    {
        /**
         * The event listener mappings for the application.
         *
         * @var array
         */
        protected $listen = [
            Registered::class => [
                SendVerificationNotification::class,
            ],
            Verified::class => [
                SendRegisterWelcomeNotification::class,
            ],
            NewsletterEvent::class => [
                SendNewsletterWelcomeNotification::class,
            ],
            AssignOrderEvent::class => [
                SendNotificationToAssignedUser::class
            ]
        ];

        /**
         * Register any events for your application.
         *
         * @return void
         */
        public function boot()
        {
            AssignOrder::observe(AssignOrderObserver::class);
        }
    }
