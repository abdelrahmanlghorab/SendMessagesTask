<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MessageController;

Route::get('/send-messages', [MessageController::class, 'sendMessages']);