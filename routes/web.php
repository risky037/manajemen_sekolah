<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('siswa', SiswaController::class);
Route::resource('guru', GuruController::class);
Route::resource('mapel', MapelController::class);
