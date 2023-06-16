<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputAduanController;
use App\Http\Controllers\KlaimController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\PengaduanBarangController;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pengaduan_barang', [PengaduanBarangController::class, 'asuransi'])->name('pengaduan_barang');
Route::get('/klaim', [KlaimController::class, 'index'])->name('klaim');
Route::get('/tentang_kami', [TentangKamiController::class, 'index'])->name('tentang_kami');
Route::get('/input_aduan', [InputAduanController::class, 'index'])->name('input_aduan');
Route::post('/simpan_data', [InputAduanController::class, 'simpanData']);
Route::get('/pengaduan_barang/search', [PengaduanBarangController::class, 'search'])->name('pengaduan_barang');
Route::get('/data', [ApiController::class, 'getData'])->name('data');
Route::get('/data/search', [ApiController::class, 'search'])->name('data');