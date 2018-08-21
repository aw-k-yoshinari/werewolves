<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('punishment.{roomId}', function ($roomId) {
    return session()->get('roomId') == $roomId;
});
Broadcast::channel('werewolves.{roomId}', function ($roomId) {
    return session()->get('roomId') == $roomId;
});
