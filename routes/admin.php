<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\IdeaController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/ideas', [IdeaController::class, 'index'])->name('ideas');
