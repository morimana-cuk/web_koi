<?php

use App\Http\Controllers\ChartsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [ChartsController::class, 'index'])->name('dashboard');
    Route::get('chartdioksida', [ChartsController::class, 'dioksida'])->name('api.chartdioksida');
    Route::get('chartmetana', [ChartsController::class, 'metana'])->name('api.chartmetana');
    Route::get('charthumidity', [ChartsController::class, 'humidity'])->name('api.charthumidity');
    Route::get('charttemperature', [ChartsController::class, 'temperature'])->name('api.charttemperature');
    Route::view('karyawan', 'karyawan')->name('karyawan');
    Route::view('riwayat', 'riwayat')->name('riwayat');
    Route::view('blog', 'blog')->name('blog');
    Route::view('profile', 'profile')->name('profile');
});

require __DIR__.'/auth.php';
