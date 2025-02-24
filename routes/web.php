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

// Route::get('/loading', function () {
//     return view('loading');
// });

// Route::get('/dua',[LoginDuaController::class, 'sayHello']);

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

// user
Route::get('/user',[UserController::class, 'index'])->name('user.index');
Route::get('/user/tambah',[UserController::class, 'create'])->name('user.tambah');
Route::post('/user/simpan', [UserController::class, 'store'])->name('user.simpan');
Route::get('/user/show', [UserController::class, 'show'])->name('user.show');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::get('/user/{id}/delete', [UserController::class, 'destroy'])->name('user.delete');