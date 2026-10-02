<?php

use App\Http\Controllers\Laporan_Banjir_Controller;
use Illuminate\Support\Facades\Route;

Route::get('/lapor-banjir', [Laporan_Banjir_Controller::class, 'index'])->name('lapor.index');
Route::post('/lapor-banjir', [Laporan_Banjir_Controller::class, 'store'])->name('lapor.store');

// Tambahkan rute ini agar 'lapor.daftar' dikenali
Route::get('/lapor-banjir/daftar', [Laporan_Banjir_Controller::class, 'daftar'])->name('lapor.daftar');
