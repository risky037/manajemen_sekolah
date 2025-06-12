<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controller\SiswaContreller; Ini Typo
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});
// routes/web.php
Route::resource('siswa', SiswaController::class);


