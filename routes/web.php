<?php

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

// Route::get('/', function () {
//     return view('template.layout');
// });
Route::get('/', [PendudukController::class,'dataPenduduk'])->name('data.penduduk'); //return view table penduduk
Route::get('/admin/data-penduduk', [PendudukController::class,'dataPenduduk'])->name('data.penduduk'); //return view table penduduk
Route::get('/admin/input-data/penduduk', [PendudukController::class, 'inputDataPenduduk'])->name('penduduk.input'); //return view form input penduduk
Route::post('/admin/input-data/penduduk', [PendudukController::class, 'store'])->name('penduduk.create'); //save data penduduk
Route::get('admin/get-data-penduduk',[PendudukController::class,'getData'])->name('penduduk.data'); //get data for data table
Route::get('admin/data/penduduk/edit/{id}',[PendudukController::class,'editDataPenduduk'])->name('penduduk.edit'); //edit data penduduk