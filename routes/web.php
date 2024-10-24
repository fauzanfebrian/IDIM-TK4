<?php

use App\Http\Controllers\HakAksesController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenggunaController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('hak-akses', HakAksesController::class);
Route::resource('pengguna', PenggunaController::class);
Route::resource('pelanggan', PelangganController::class);
