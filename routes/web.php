<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginDuaController;
use App\Http\Controllers\DashboardController;
Route::get('/', function () {
    return view('login');
});

Route::get('/dua',[LoginDuaController::class, 'sayHello']);

Route::get('/dashboard',[DashboardController::class, 'index']);