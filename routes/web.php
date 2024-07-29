<?php

use App\Http\Controllers\ChartsController;
use App\Http\Controllers\RiwayatController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [ChartsController::class, 'index'])->name('dashboard');
    Route::controller(RiwayatController::class)->prefix('/dashboard')->group(function () {
        Route::view('detail/1', 'dashboard/detaildashboard1')->name('detail.dashboard1');
        Route::view('detail/2', 'dashboard/detaildashboard2')->name('detail.dashboard2');
        Route::view('detail/3', 'dashboard/detaildashboard3')->name('detail.dashboard3');
        Route::view('detail/4', 'dashboard/detaildashboard4')->name('detail.dashboard4');
    });
    Route::get('chartdioksida/{id}', [ChartsController::class, 'dioksida'])->name('api.chartdioksida');
    Route::get('chartamonia/{id}', [ChartsController::class, 'amonia'])->name('api.chartamonia');
    Route::get('chartmetana/{id}', [ChartsController::class, 'metana'])->name('api.chartmetana');
    Route::get('charthumidity/{id}', [ChartsController::class, 'humidity'])->name('api.charthumidity');
    Route::get('charttemperature/{id}', [ChartsController::class, 'temperature'])->name('api.charttemperature');
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
