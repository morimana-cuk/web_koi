<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartsController;

Route::get('chartdioksida', [ChartsController::class, 'dioksida'])->name('api.chartdioksida');
Route::get('chartmetana', [ChartsController::class, 'metana'])->name('api.chartmetana');

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('karyawan', 'karyawan')->name('karyawan');
    Route::view('riwayat', 'riwayat')->name('riwayat');
    Route::view('blog', 'blog')->name('blog');
    Route::view('profile', 'profile')->name('profile');
});

require __DIR__ . '/auth.php';
