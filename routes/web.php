<?php

use App\Http\Controllers\Laporan_Banjir_Controller;
use Illuminate\Support\Facades\Route;

Route::get('/lapor-banjir', [Laporan_Banjir_Controller::class, 'index']);
Route::post('/lapor-banjir', [Laporan_Banjir_Controller::class, 'store']);
