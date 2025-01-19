<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginDuaController;
use App\Http\Controllers\DashboardController;
Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/loading', function () {
    return view('loading');
});

Route::get('/dua',[LoginDuaController::class, 'sayHello']);

Route::get('/dashboard',[DashboardController::class, 'index']);