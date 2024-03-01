<?php

use App\Models\Matrik;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatrikController;
use App\Http\Controllers\NomenklaturController;

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

// Route::prefix('/')->controller(\App\Http\Controllers\MatrikController::class)->group(function () {
//     Route::get('/', 'index')->name('index');
//     Route::get('/create', 'create')->name('tambahData');
// });

Route::get('/', [MatrikController::class, 'index'])->name('beranda');
Route::get('/create/prioritas/{tahunpd}', [MatrikController::class, 'getPrioritas'])->name('getPrioritas');
Route::get('/create/kecamatan/{kabupaten}', [MatrikController::class, 'getKecamatan'])->name('getKecamatan');
Route::get('/create/kelurahan/{kecamatan}', [MatrikController::class, 'getKelurahan'])->name('getKelurahan');
Route::get('/create', [MatrikController::class, 'create'])->name('tambahData');
Route::post('/store', [MatrikController::class, 'store'])->name('storeData');
Route::get('/show/{id}', [MatrikController::class, 'show'])->name('detailData');
Route::get('/edit/{id}', [MatrikController::class, 'edit'])->name('ubahData');
Route::put('/update/{id}', [MatrikController::class, 'update'])->name('updateData');
Route::delete('/destroy/{id}', [MatrikController::class, 'destroy'])->name('hapusData');

Route::get('/nomenklatur/programs/', [NomenklaturController::class, 'indexProgram']);
Route::get('/nomenklatur', [NomenklaturController::class, 'indexBidang'])->name('nomenklatur');
Route::get('nomenklatur/store', [NomenklaturController::class, 'storeBidang'])->name('simpan');
Route::delete('nomenklatur/destroy/{id}', [NomenklaturController::class, 'destroy'])->name('hapusBidang');

Route::get('/get-bidangs/{skpdId}', [NomenklaturController::class, 'getBidangsBySkpd']);
Route::get('/get-programs/{kodeBidang}', [NomenklaturController::class, 'getPrograms']);
Route::get('/get-kegiatans/{kodeProgram}', [NomenklaturController::class, 'getKegiatans']);
Route::get('/get-subkegiatans/{kodeKegiatan}', [NomenklaturController::class, 'getSubkegiatans']);
