<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Login
Route::get('/account/register', [LoginController::class, 'registerPage'])->name('account.register');
Route::post('/account/register', [LoginController::class, 'processRegister'])->name('account.processRegister');
// Registration
Route::get('/account/login', [LoginController::class, 'loginPage'])->name('account.login');
Route::post('/account/login', [LoginController::class, 'authenticate'])->name('account.authenticate');
// Logout
Route::get('/account/logout', [LoginController::class, 'logout'])->name('account.logout');
// Dashboard
Route::get('/account/dashboard', [DashboardController::class, 'dashboard'])->name('account.dashboard');
