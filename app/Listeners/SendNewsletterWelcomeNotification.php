<?php

namespace App\Listeners;

use App\Models\SocialLinks;
use App\Notifications\NewsletterWelcomeMessage;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewsletterWelcomeNotification implements ShouldQueue
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
        $event->user->notify((new NewsletterWelcomeMessage($this->social_links, $event->user))
            ->delay($delay));
    }
}
