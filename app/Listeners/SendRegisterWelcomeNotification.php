<?php

namespace App\Listeners;

use App\Models\SocialLinks;
use App\Notifications\RegisterWelcomeMessage;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendRegisterWelcomeNotification
{
    public $social_links;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->social_links = SocialLinks::orderByDesc('id')->get();
    }

    /**
     * Handle the event.
     *
     * @param Verified $event
     * @return void
     */
    public function handle(Verified $event)
    {
        $delay = now()->addSeconds(5);
        $event->user->notify((new RegisterWelcomeMessage($this->social_links, $event->user))
            ->delay($delay));
    }
}
