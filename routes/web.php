<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppController;


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('handleLogin');
Route::get('/dashboard', [AppController::class, 'index'])->name('dashboard');
