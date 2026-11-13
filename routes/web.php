<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\PictureSizeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'create'])->name('login');
    Route::post('/login', [AuthController::class, 'store'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/events/show', [EventController::class, 'show'])->name('events.show');
    
    Route::get('/pictures', [PictureController::class, 'index'])->name('pictures.index');
    
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/show', [OrderController::class, 'show'])->name('orders.show');

    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');

    Route::resource('/settings/categories', CategoryController::class)->only(['index', 'store', 'update', 'destroy'])->name('categories', CategoryController::class);
    Route::resource('/settings/picture-sizes', PictureSizeController::class)->only(['index', 'store', 'update', 'destroy'])->name('picture-sizes', PictureSizeController::class);
    Route::resource('/settings/users', UserController::class)->only(['index', 'store', 'destroy'])->name('users', UserController::class);

    Route::delete('/logout', [AuthController::class, 'destroy'])->name('logout');
});