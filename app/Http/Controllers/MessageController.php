<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendMessageJob;
use App\Models\User;

class MessageController extends Controller
{
    public function sendMessages()
    {
        User::select('id', 'email')->chunk(500, function ($users) {
            SendMessageJob::dispatch($users);
        });

        return response()->json(['message' => 'Messages are being sent in the background']);
    }
}
