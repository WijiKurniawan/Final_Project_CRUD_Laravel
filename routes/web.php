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

Route::get('/pegawai', function () {
    return view('pegawai.index');
});

Route::get('/absen', function () {
    return view('absen.index');
});

Route::get('/lembur', function () {
    return view('lembur.index');
});

Route::get('/jabatan', function () {
    return view('jabatan.index');
});

Route::get('/riwayatjabatan', function () {
    return view('riwayatjabatan.index');
});

Route::get('/pendidikan', function () {
    return view('pendidikan.index');
});

Route::get('/pengalamankerja', function () {
    return view('pengalamankerja.index');
});