<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiC;
use Illuminate\Session\Store;

// use App\Http\Controllers\JabatanC;
// use App\Http\Controllers\AbsenC;
// use App\Http\Controllers\LemburC;
// use App\Http\Controllers\Pendidikan_pegawaiC;
// use App\Http\Controllers\Pengalaman_kerjaC;
// use App\Http\Controllers\Riwayat_jabatanC;

//Route login start
Route::get('/', function () {
    return view('welcome');
});

//Route pegawai start
Route::get('/pegawai', [PegawaiC::class, 'index']);
Route::get('/pegawai/create', [PegawaiC::class, 'create']);
Route::post('/pegawai/store', [PegawaiC::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiC::class, 'edit']); //pakai get karena baru nampilkan form id utk parameter
Route::put('/pegawai/{id}', [PegawaiC::class, 'update']);
Route::delete('/pegawai/{id}', [PegawaiC::class, 'destroy']);


//Route Absen strat
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


// Route::get('/pegawai', [PegawaiC::class, 'index']);
// Route::get('/pegawai', [JabatanC::class, 'index']);
// Route::get('/pegawai', [AbsenC::class, 'index']);
// Route::get('/pegawai', [LemburC::class, 'index']);
// Route::get('/pegawai', [Pendidikan_pegawaiC::class, 'index']);
// Route::get('/pegawai', [Pengalaman_kerjaC::class, 'index']);
// Route::get('/pegawai', [Riwayat_jabatanC::class, 'index']);
