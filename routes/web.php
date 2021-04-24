<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;


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
Route::get('/nopol', [PegawaiController::class, 'index']);
Route::get('/nopol/tambah', [PegawaiController::class, 'tambah']);
Route::post('/nopol/store', [PegawaiController::class, 'store']);
Route::get('/nopol/edit/{id}', [PegawaiController::class, 'edit']);
Route::put('/nopol/update/{id}', [PegawaiController::class, 'update']);
Route::get('/nopol/hapus/{id}', [PegawaiController::class, 'delete']);
// Route::get('/pegawai', 'PegawaiController@index');
Route::get('/', function () {
    return view('welcome');
});
