<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Authentication
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'do_login']);

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'do_register']);

