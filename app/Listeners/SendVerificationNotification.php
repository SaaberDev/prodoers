<?php

namespace App\Listeners;

use App\Models\SocialLinks;
use App\Notifications\EmailVerification;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendVerificationNotification
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
     * @param Registered $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $delay = now()->addSeconds(5);
        $event->user->notify((new EmailVerification($this->social_links, $event->user))
            ->delay($delay));
    }
}
