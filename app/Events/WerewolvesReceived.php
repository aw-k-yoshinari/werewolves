<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class WerewolvesReceived implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    private $roomId;

    /**
     * Create a new event instance.
     * $message = [
     *     'message' => メッセージ,
     *     'playerName' => player_name or 'GM'
     * ]
     * @param $message
     * @param $roomId
     */
    public function __construct($message, $roomId)
    {
        $this->message = $message;
        $this->roomId = $roomId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel
     */
    public function broadcastOn()
    {
        return new Channel('werewolves.' . $this->roomId);
    }


}
