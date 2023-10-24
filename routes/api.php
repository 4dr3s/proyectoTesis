<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/lista', [UsersController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);