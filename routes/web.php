<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenerimaanKaryawanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::resource('penerimaan_karyawans', PenerimaanKaryawanController::class);