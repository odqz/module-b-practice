<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'create'])->name('login');
    Route::post('/login', [AuthController::class, 'store'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::delete('/logout', [AuthController::class, 'destroy'])->name('logout');

    Route::get('/', function () { return view('welcome'); });
});