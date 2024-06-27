<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

// Auth Route 
Route::get('/register', [AuthController::class, 'showRegisterPage'])->name('register.page');
Route::get('/login', [AuthController::class, 'showLoginPage'])->name('login.page');
Route::get('/forget-password', [AuthController::class, 'showForgetPage'])->name('forget.page');




// Dashboard All Route 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.page');














