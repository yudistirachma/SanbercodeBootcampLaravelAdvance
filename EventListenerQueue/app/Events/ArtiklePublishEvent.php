<?php

namespace App\Events;

use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ArtiklePublishEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $userArtikle;
    public $artikle;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, $userArtikle, $artikle)
    {
        $this->user = $user;
        $this->userArtikle = $userArtikle;
        $this->artikle = $artikle;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    // public function broadcastOn()
    // {
    //     return new PrivateChannel('channel-name');
    // }
}
