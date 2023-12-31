<?php

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
    return view('welcome');
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', function () {
	return view('hello');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('link', function () {
	return view('link');
});

Route::get('responsive', function () {
	return view('responsive');
});

Route::get('style', function () {
	return view('style');
});

Route::get('validasi', function () {
	return view('validasi');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
Route::post('/pegawai/show/{id}','App\Http\Controllers\PegawaiController@show');


Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@keranjang');
Route::get('/keranjangbelanja/batal/{id}','App\Http\Controllers\KeranjangController@batal');
Route::get('/keranjangbelanja/tambah2','App\Http\Controllers\KeranjangController@tambah2');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');

//route CRUD nilai
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index2');
Route::get('/nilaikuliah/tambah3','App\Http\Controllers\NilaiKuliahController@tambah3');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

//route CRUD bank
Route::get('/bank','App\Http\Controllers\BankController@index');
Route::get('/bank/tambah','App\Http\Controllers\BankController@tambah');
Route::post('/bank/store','App\Http\Controllers\BankController@store');
Route::get('/bank/edit/{id}','App\Http\Controllers\BankController@edit');
Route::post('/bank/update','App\Http\Controllers\BankController@update');
Route::get('/bank/hapus/{id}','App\Http\Controllers\BankController@hapus');
Route::get('/bank/cari','App\Http\Controllers\BankController@cari');
Route::get('/bank/view/{id}','App\Http\Controllers\BankController@view');

//route CRUD karyawan
Route::get('/karyawan','App\Http\Controllers\KaryawanController@index');
Route::get('/karyawan/tambah','App\Http\Controllers\KaryawanController@tambah');
Route::post('/karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::get('/karyawan/hapus/{id}','App\Http\Controllers\KaryawanController@hapus');
