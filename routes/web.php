<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiC;
// use App\Http\Controllers\JabatanC;
// use App\Http\Controllers\AbsenC;
// use App\Http\Controllers\LemburC;
// use App\Http\Controllers\Pendidikan_pegawaiC;
// use App\Http\Controllers\Pengalaman_kerjaC;
// use App\Http\Controllers\Riwayat_jabatanC;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai', [PegawaiC::class, 'index']);
// Route::get('/pegawai', [JabatanC::class, 'index']);
// Route::get('/pegawai', [AbsenC::class, 'index']);
// Route::get('/pegawai', [LemburC::class, 'index']);
// Route::get('/pegawai', [Pendidikan_pegawaiC::class, 'index']);
// Route::get('/pegawai', [Pengalaman_kerjaC::class, 'index']);
// Route::get('/pegawai', [Riwayat_jabatanC::class, 'index']);




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
