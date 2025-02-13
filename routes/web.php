<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginDuaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

Route::get('/user',[UserController::class, 'index']);
Route::get('/user/tambah',[UserController::class, 'create']);
Route::post('/user/simpan', [UserController::class, 'store']);
Route::get('/user/{id}/show', [UserController::class, 'show']);
Route::post('/user/{id}/update', [UserController::class, 'update']);
Route::get('/user/{id}/delete', [UserController::class, 'destroy']);