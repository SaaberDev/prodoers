<?php

namespace App\Providers;

use App\Events\Newsletter;
use App\Events\Order\AssignOrderEvent;
use App\Listeners\Order\AssignOrderListener;
use App\Listeners\SendVerificationNotification;
use App\Listeners\SendNewsletterWelcomeNotification;
use App\Listeners\SendRegisterWelcomeNotification;
use App\Models\AssignOrder;
use App\Models\Order;
use App\Observers\Admin\Order\AssignOrderObserver;
use App\Observers\Admin\Order\OrderObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
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
            SendNewsletterWelcomeNotification::class,
        ],
        Newsletter::class => [
            SendNewsletterWelcomeNotification::class,
        ],
        AssignOrderEvent::class => [
            AssignOrderListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Order::observe(OrderObserver::class);
        AssignOrder::observe(AssignOrderObserver::class);
    }
}
