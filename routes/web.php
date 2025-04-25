<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\DashboardController;

Route::get('/', [LoginController::class, 'index']);
Route::get('/signin/{displayName}', [SignController::class, 'signin']);
Route::get('/signout', [SignController::class, 'signout']);
Route::get('/dashboard', [DashboardController::class, 'index']);
