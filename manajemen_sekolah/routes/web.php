<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controller\SiswaContreller;

Route::get('/', function () {
    return view('welcome');
});
// routes/web.php
Route::resource('siswa', SiswaController::class);

