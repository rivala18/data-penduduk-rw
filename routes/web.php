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

Route::get('/', function () {
    return view('template.layout');
});
Route::get('/admin/penduduk', [PendudukController::class, 'index'])->name('penduduk.index');
Route::post('/admin/penduduk/data', [PendudukController::class, 'store'])->name('penduduk.create');
Route::get('admin/penduduk/data',[PendudukController::class,'getData'])->name('penduduk.data');
Route::get('admin/penduduk/data/edit/{id}',[PendudukController::class,'editData'])->name('penduduk.edit');