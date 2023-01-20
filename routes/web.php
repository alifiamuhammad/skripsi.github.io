<?php

use App\Http\Controllers\route_controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\Data_GuruController;
use App\Http\Controllers\auth_controller;
use App\Http\Controllers\Informasi_controller;
use App\Http\Controllers\kelas_controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|w
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//data siswa
Route::get('tambah_data_siswa', [DataSiswaController::class, 'tambah_data_siswa']);
Route::get('dt_siswa', [DataSiswaController::class, 'index']);
Route::get('detailsiswa{id}', [DataSiswaController::class, 'detailsiswa']);
Route::post('simpan-data-siswa',[DataSiswaController::class,'store']);
Route::post('kelas', [DatasiswaController::class,'kelas']);
//data kelas
Route::get('detailkelas{id}', [kelas_controller::class, 'detailkelas']);
Route::get('data_kelas', [kelas_controller::class, 'kelas']);
Route::post('tambah_kelas', [kelas_controller::class, 'store']);
Route::get('tambah_data_kelas', [kelas_controller::class, 'tambah_data_kelas']);
//data guru
Route::get('dt_guru',[Data_GuruController::class,'index']);
//data informasi
Route::get('informasi', [Informasi_controller::class,'informasi']);
Route::get('tambah_Informasi', [Informasi_controller::class,'tambah_informasi']);
Route::post('tambah_data_informasi', [Informasi_controller::class,'store']);


Route::group(['middleware'=>['auth:datasiswa,data_gurus','cek_login:siswa']],function () {
    Route::get('home2', [route_controller::class, 'homes']);
    Route::get('home1', [route_controller::class, 'home']);
});
Route::post('proses_login',[auth_controller::class,'proses_login']);
Route::get('logout', [auth_controller::class, 'logout']);

//page guru
Route::get('home3', [route_controller::class, 'homeguru']);

//route belum login
Route::get('/resources/views/ss', [route_controller::class, 'error']);
