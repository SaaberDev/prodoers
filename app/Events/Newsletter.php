<?php

namespace App\Events;

use App\Models\SocialLinks;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Newsletter
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $subscriber;

    /**
     * Create a new event instance.
     *
     * @param $subscriber
     */
    public function __construct($subscriber)
    {
        $this->subscriber = $subscriber;
    }
}
