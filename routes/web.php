<?php

use App\Http\Controllers\ChartsController;
use App\Http\Controllers\RiwayatController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [ChartsController::class, 'index'])->name('dashboard');
    Route::controller(RiwayatController::class)->prefix('/dashboard')->group(function () {
        Route::get('detail/{id}', [ChartsController::class, 'detaildashboard'])->name('detail.dashboard');
    });
    Route::get('chartdioksida', [ChartsController::class, 'dioksida'])->name('api.chartdioksida');
    Route::get('chartamonia', [ChartsController::class, 'amonia'])->name('api.chartamonia');
    Route::get('chartmetana', [ChartsController::class, 'metana'])->name('api.chartmetana');
    Route::get('charthumidity', [ChartsController::class, 'humidity'])->name('api.charthumidity');
    Route::get('charttemperature', [ChartsController::class, 'temperature'])->name('api.charttemperature');
    Route::view('karyawan', 'karyawan')->name('karyawan');
    Route::controller(RiwayatController::class)->prefix('/dashboard')->group(function () {
        Route::get('riwayat-temperature', 'riwayatTemperature')->name('riwayat.temperature');
        Route::get('riwayat-humidity', 'riwayatHumidity')->name('riwayat.humidity');
        Route::get('riwayat-metana', 'riwayatMetana')->name('riwayat.metana');
        Route::get('riwayat-dioksida', 'riwayatDioksida')->name('riwayat.dioksida');
        Route::get('riwayat-amonia', 'riwayatAmonia')->name('riwayat.amonia');
    });

    Route::view('blog', 'blog')->name('blog');
    Route::view('addblog', 'addblog')->name('addblog');
    Route::view('profile', 'profile')->name('profile');
});

require __DIR__.'/auth.php';
