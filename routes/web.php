<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'adminLogin']);
Route::middleware(AdminMiddleware::class)->group(function () {
    Route::get('dashboard', [AuthController::class, 'dashboard']);
});