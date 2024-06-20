<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('karyawan', 'karyawan')->name('karyawan');
    Route::view('riwayat', 'riwayat')->name('riwayat');
    Route::view('blog', 'blog')->name('blog');
    Route::view('profile', 'profile')->name('profile');
});

require __DIR__ . '/auth.php';
