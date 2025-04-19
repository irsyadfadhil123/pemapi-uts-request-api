<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\APIController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Route yang butuh API Key
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/data', [APIController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
