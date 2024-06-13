<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('main', 'monitoring')
    ->middleware(['auth', 'verified'])
    ->name('monitoring');

Route::view('tables', 'tables')
    ->middleware(['auth', 'verified'])
    ->name('table');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
