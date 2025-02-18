<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use Illuminate\Support\Facades\Mail;


class SendMessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $users;

    public function __construct($users)
    {
        $this->users = $users;
    }

    public function handle()
    {
        foreach ($this->users as $user) {
            // Simulate sending a message
            Mail::raw('Hello, this is a test message!', function ($message) use ($user) {
                $message->to($user->email)->subject('Notification');
            });
        }
    }
}
