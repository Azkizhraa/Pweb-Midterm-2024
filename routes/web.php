<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;


Route::get('/browse', function () {
    return view('browse');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/index', function () {
    return view('index');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/logout', function () {
    return view('logout');
});


// Route::get('/message_board', function () {
//     return dd('message_board');
// });

Route::get('/message_board', [MessageController::class, 'index']);
Route::post('/store_message', [MessageController::class, 'store']);

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/request', function () {
    return view('request');
});
 
Route::get('/review', function () {
    return view('review');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/schedule_meet', function () {
    return view('schedule_meet');
});

Route::get('/send_request', function () {
    return view('send_request');
});

Route::get('/sumbit_review', function () {
    return view('sumbit_review');
});
