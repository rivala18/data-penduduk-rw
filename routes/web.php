<?php

use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[PendudukController::class,'dataPenduduk']);
Route::get('/admin/data-penduduk', [PendudukController::class,'dataPenduduk'])->name('data.penduduk'); //return view table penduduk
Route::post('/admin/data-penduduk/delete', [PendudukController::class,'hapusDataPenduduk'])->name('penduduk.delete'); //return delete data penduduk
Route::get('/admin/input-data/penduduk', [PendudukController::class, 'inputDataPenduduk'])->name('penduduk.input'); //return view form input penduduk
Route::post('/admin/input-data/penduduk', [PendudukController::class, 'store'])->name('penduduk.create'); //save data penduduk
Route::get('admin/get-data-penduduk',[PendudukController::class,'getData'])->name('penduduk.data'); //get data for data table
Route::get('admin/data/penduduk/edit/{id}',[PendudukController::class,'editDataPenduduk'])->name('penduduk.edit'); //edit data penduduk
Route::post('admin/data/penduduk/edit',[PendudukController::class,'updateDataPenduduk'])->name('penduduk.update'); //edit data penduduk
Route::get('admin/detail-penduduk/{id}',[PendudukController::class,'detail'])->name('penduduk.detail');
Route::get('admin/detail-kartu-keluarga/{id}',[KartuKeluargaController::class,'detail'])->name('detail.kk');

Route::get('/admin/data-kartu-keluarga', [KartuKeluargaController::class,'index'])->name('data.kk');
Route::get('/admin/edit-kartu-keluarga/{id}', [KartuKeluargaController::class,'edit'])->name('edit.kk');
Route::post('/admin/hapus-kartu-keluarga', [KartuKeluargaController::class,'hapusKk'])->name('hapus.kk');
Route::post('/admin/update-kartu-keluarga', [KartuKeluargaController::class,'updateDataKk'])->name('update.kk');
Route::get('/admin/getdata-kartu-keluarga', [KartuKeluargaController::class,'getData'])->name('getData.kk');
Route::get('/admin/input-kartu-keluarga', [KartuKeluargaController::class,'inputDataKartuKeluarga'])->name('kk.input');

Route::get('/admin/getdata-nik-kartu-keluarga', [KartuKeluargaController::class,'getDataNik'])->name('getDataNik.kk');
Route::get('/admin/getdata-no-keluarga', [PendudukController::class,'getDataNoKk'])->name('penduduk.getDataNoKk');