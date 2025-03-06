<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginDuaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanController;

//signup
Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::post('/signup', [SignupController::class, 'store']);

//login
Route::get('/', [LoginController::class, 'showLogin'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionLogin'])->name('actionlogin');
Route::get('/logout', [LoginController::class, 'actionLogout'])->name('actionLogout');
Route::middleware('auth')->group(function () {
        

    // Route::get('/loading', function () {
    //     return view('loading');
    // });

    // Route::get('/dua',[LoginDuaController::class, 'sayHello']);

    //dashboard
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    // user
    Route::get('/user',[UserController::class, 'index'])->name('user.index');
    Route::get('/profil',[UserController::class, 'profil'])->name('user.profil');
    Route::get('/user/tambah',[UserController::class, 'create'])->name('user.tambah');
    Route::post('/user/simpan', [UserController::class, 'store'])->name('user.simpan');
    Route::get('/user/show', [UserController::class, 'show'])->name('user.show');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/{id}/update', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/{id}/delete', [UserController::class, 'destroy'])->name('user.delete');

    // laporan
    Route::get('/laporan',[LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/laporan/tambah',[LaporanController::class, 'create'])->name('laporan.tambah');
    Route::post('/laporan/simpan', [LaporanController::class, 'store'])->name('laporan.simpan');
    Route::get('/laporan/show', [LaporanController::class, 'show'])->name('laporan.show');
    Route::get('/laporan/{id}/edit', [LaporanController::class, 'edit'])->name('laporan.edit');
    Route::post('/laporan/{id}/update', [LaporanController::class, 'update'])->name('laporan.update');
    Route::get('/laporan/{id}/delete', [LaporanController::class, 'destroy'])->name('laporan.delete');
});