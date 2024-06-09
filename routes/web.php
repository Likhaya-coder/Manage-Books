<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Profile\UserProfileController;
use App\Http\Controllers\Profile\UserPasswordController;
use App\Http\Controllers\Profile\AvatarController;
use App\Http\Middleware\AuthMiddleware;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register-dashboard');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login-dashboard');

Route::middleware([AuthMiddleware::class,])->group(function() {
    Route::get('/dashboard', [RegisterController::class, 'showDashboard']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/user-profile', [UserProfileController::class, 'update']);
    Route::patch('/user-profile/{id}', [UserProfileController::class, 'store'])->name('user-profile');
    Route::get('/user-password', [UserPasswordController::class, 'update']);
    Route::patch('/user-password/{id}', [UserPasswordController::class, 'store'])->name('user-password');
    Route::post('/avatar', [AvatarController::class, 'store'])->name('avatar');
});