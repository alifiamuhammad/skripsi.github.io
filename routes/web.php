<?php

use App\Http\Controllers\route_controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\auth_controller;
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
    return view('welcome');
});
Route::get('home1', [route_controller::class, 'home']);
Route::get('home2', [route_controller::class, 'homes']);
Route::get('tambah_data_siswa', [DataSiswaController::class, 'tambah_data_siswa']);
Route::get('dt_siswa', [DataSiswaController::class, 'index']);
Route::get('detailsiswa{id}', [DataSiswaController::class, 'detailsiswa']);
Route::post('simpan-data-siswa',[DataSiswaController::class,'store']);
Route::post('proses_login',[auth_controller::class,'proses_login']);
