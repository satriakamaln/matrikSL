<?php

use App\Models\Matrik;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
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
Route::get('/', [loginController::class, 'index'])->name('login');
Route::post('/login-proses', [loginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/index', [MatrikController::class, 'index'])->name('beranda');
    Route::get('admin/create/prioritas/{tahunpd}', [MatrikController::class, 'getPrioritas'])->name('getPrioritas');
    Route::get('admin/create/kecamatan/{kabupaten}', [MatrikController::class, 'getKecamatan'])->name('getKecamatan');
    Route::get('admin/create/kelurahan/{kecamatan}', [MatrikController::class, 'getKelurahan'])->name('getKelurahan');
    Route::get('/create', [MatrikController::class, 'create'])->name('tambahData');
    Route::post('/store', [MatrikController::class, 'store'])->name('storeData');
    Route::get('/show/{id}', [MatrikController::class, 'show'])->name('detailData');
    Route::get('/edit/{id}', [MatrikController::class, 'edit'])->name('ubahData');
    Route::put('/update/{id}', [MatrikController::class, 'update'])->name('updateData');
    Route::delete('/destroy/{id}', [MatrikController::class, 'destroy'])->name('hapusData');

    Route::get('index/nomenklatur', [NomenklaturController::class, 'indexBidang'])->name('nomenklatur');
    Route::get('nomenklatur/store', [NomenklaturController::class, 'storeBidang'])->name('simpan');
    Route::delete('nomenklatur/destroy/{id}', [NomenklaturController::class, 'destroy'])->name('hapusBidang');

    Route::get('admin/get-bidangs/{skpdId}', [NomenklaturController::class, 'getBidangsBySkpd']);
    Route::get('admin/get-programs/{kodeBidang}', [NomenklaturController::class, 'getPrograms']);
    Route::get('admin/get-kegiatans/{kodeProgram}', [NomenklaturController::class, 'getKegiatans']);
    Route::get('admin/get-subkegiatans/{kodeKegiatan}', [NomenklaturController::class, 'getSubkegiatans']);
});
