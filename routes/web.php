<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HakAksesController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index']);


Route::resource('hak-akses', HakAksesController::class);
Route::resource('pengguna', PenggunaController::class);
Route::resource('pelanggan', PelangganController::class);
Route::resource('supplier', SupplierController::class);
Route::resource('barang', BarangController::class);
Route::resource('pembelian', PembelianController::class);
Route::resource('penjualan', PenjualanController::class);
