<?php

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
Route::resource('jenis','JeniController');
Route::resource('ruangs','RuangController');
Route::resource('inventaris','InventariController');
Route::resource('detailpinjams','DetailPinjamController');
Route::resource('peminjamans','PeminjamanController');
Route::resource('pegawais','PegawaiController');
