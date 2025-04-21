<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
    if (!session()->has('user')) {
        return redirect()->route('login.form');
    }

    return view('dashboard', ['user' => session('user')]);
})->name('dashboard');

Route::get('/logout', function () {
    session()->forget('user');
    return redirect()->route('login.form');
})->name('logout');
