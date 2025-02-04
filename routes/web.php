<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginDuaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
Route::get('/', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/loading', function () {
    return view('loading');
});

// Route::get('/dua',[LoginDuaController::class, 'sayHello']);

Route::get('/dashboard',[DashboardController::class, 'index']);

Route::get('/laporan',[LaporanController::class, 'index']);
Route::get('/laporan/tambah',[LaporanController::class, 'create']);