<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;

class WantFood implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets;

    public string $item;

    /**
     * Create a new event instance.
     *
     * @param string $item
     * @return void
     */
    public function __construct(string $item)
    {
        $this->item = $item;
    }

    /**
     * The name the event should broadcast as.
     *
     * @return string
     */
    public function broadcastAs(): string
    {
        return 'some-food';
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel
     */
    public function broadcastOn(): Channel
    {
        return new Channel('want-food');
    }
}
