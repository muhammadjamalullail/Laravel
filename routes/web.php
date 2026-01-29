<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;

Route::get('/', function () {
    return redirect()->route('dosens.index');
});

Route::resource('dosens', DosenController::class);
Route::resource('mahasiswas', MahasiswaController::class);
Route::resource('matkuls', MatkulController::class);
