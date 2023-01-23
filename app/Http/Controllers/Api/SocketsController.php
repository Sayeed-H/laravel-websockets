<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Broadcasting\Broadcasters\PusherBroadcaster;
use Illuminate\Http\Request;
use Pusher\Pusher;

class SocketsController extends Controller
{
    public function connect(Request $request)
    {
        $broadcaster = new PusherBroadcaster(new Pusher(env("PUSHER_APP_KEY"),env("PUSHER_APP_SECRET"),env("PUSHER_APP_ID"),[]));
        return $broadcaster->validAuthenticationResponse($request, []);
    }
}
