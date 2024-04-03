<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::post('/', function () {
    return view('home');
});


