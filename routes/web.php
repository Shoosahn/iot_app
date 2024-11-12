<?php

use Illuminate\Support\Facades\Route; // Pastikan ini ada
use App\Http\Controllers\CuacaController; // Mengimpor controller CuacaController

Route::get('/cuaca', [CuacaController::class, 'index']);
Route::get('/cek-cuaca', [CuacaController::class, 'cekCuaca']);
