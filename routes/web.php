<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('landing-page');

Route::get('forgot-password', function () {
    return view('forgot-password');
})->name('password.request');

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('forgot-password', [AuthController::class, 'forgot_password'])->name('password.email');
Route::get('/reset-password/{token}', function (string $token) {
    return view('reset-password', ['token' => $token]);
})->name('password.reset');
Route::post('reset-password', [AuthController::class, 'reset_password'])->name('password.update');
