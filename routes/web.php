<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PresensiSiswaController;
use App\Http\Controllers\TugasController;

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
    return view('auth/login');
});
Route::view('/s_home','s_home');
//tugas
Route::get('s_tugas/{tugas}', [TugasController::class, 'lihat']);
Route::get('/s_tugas', [TugasController::class, 'tambah']);
Route::post('/s_tugas', [TugasController::class, 'simpan']);

Route::view('/materi','s_materi');
// Route::view('/absen','s_absen');
Route::view('/nilai','s_nilai');
Route::view('/ulangan','s_ulangan');

// admin
Route::view('/Admin/a_siswa','Admin/a_siswa');
Route::view('/Admin/a_guru','Admin/a_guru');
Route::view('/Admin/a_mapel','Admin/a_mapel');
Route::view('/Admin/a_kelas','Admin/a_kelas');


Auth::routes();

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home')->middleware('is_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'user'])->name('home');
Route::get('guru/home', [App\Http\Controllers\HomeController::class, 'guru'])->name('guru.home');

//presensi
Route::group(['middleware' => ['auth','is_admin:0']], function () {
    route::post('/simpan-masuk',[PresensiSiswaController::class,'store'])->name('simpan-masuk');
    route::get('/presensi-masuk',[PresensiSiswaController::class,'index'])->name('presensi-masuk');  
    route::get('/presensi-keluar',[PresensiSiswaController::class,'absenKeluar'])->name('presensi-keluar'); 
    route::get('/ubah-presensi',[PresensiSiswaController::class,'keluar'])->name('ubah-presensi');  
});

// tugas
// Route::group(['middleware' => ['auth','is_admin:0']], function () {
//     Route::get('s_tugas/{tugas}', [TugasController::class, 'lihat']);
// });
// Route::group(['middleware' => ['auth','is_admin:2']], function () {
//     Route::get('/s_tugas', [TugasController::class, 'tambah']);
//     Route::post('s_tugas', [TugasController::class, 'simpan']);
// });
