<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('s_home');
});
Route::view('/tugas','s_tugas');
Route::view('/materi','s_materi');
Route::view('/absen','s_absen');
Route::view('/nilai','s_nilai');
Route::view('/ulangan','s_ulangan');

Auth::routes();

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home')->middleware('is_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'user'])->name('home');
Route::get('guru/home', [App\Http\Controllers\HomeController::class, 'guru'])->name('guru.home');