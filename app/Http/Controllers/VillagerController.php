<?php

namespace App\Http\Controllers;

use App\Events\PunishmentRecieved;
use App\Http\Requests\AbilityRequest;
use App\Services\PunishmentService;

class VillagerController extends Controller
{
    public function show()
    {
        return view('night.villager');
    }

    public function punishment(AbilityRequest $request, PunishmentService $service)
    {
        $message = $service->punishment($request->player_id);

        // websocketに通知
        event(new PunishmentRecieved($message, $request->cookie('roomId')));

        return response()->json($message);
    }
}
