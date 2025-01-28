<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registrasi',[ AuthController::class, 'showRegist'])->name('registrasi.form');
Route::post('/registrasi/submit',[ AuthController::class, 'regist'])->name('registrasi.submit');

Route::get('/login',[ AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login/submit',[ AuthController::class, 'login'])->name('login.submit');