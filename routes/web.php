<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController; // Perhatikan: "Controllers", bukan "Controller"
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\GuruController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('siswa', SiswaController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('guru', GuruController::class);
