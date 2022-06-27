<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiC;
use Illuminate\Session\Store;
use App\Http\Controllers\AbsenC;
use App\Http\Controllers\JabatanC;
use App\Http\Controllers\LemburC;


// use App\Http\Controllers\JabatanC;
// use App\Http\Controllers\LemburC;
// use App\Http\Controllers\Pendidikan_pegawaiC;
// use App\Http\Controllers\Pengalaman_kerjaC;
// use App\Http\Controllers\Riwayat_jabatanC;

//Route login start
Route::get('/', function () {
    return view('welcome');
});

//Route pegawai start
Route::middleware(['auth'])->group(function () {
    Route::get('/pegawai', [PegawaiC::class, 'index']);
    Route::get('/pegawai/create', [PegawaiC::class, 'create']);
    Route::post('/pegawai/store', [PegawaiC::class, 'store']);
    Route::get('/pegawai/edit/{id}', [PegawaiC::class, 'edit']); //pakai get karena baru nampilkan form id utk parameter
    Route::put('/pegawai/{id}', [PegawaiC::class, 'update']);
    Route::delete('/pegawai/{id}', [PegawaiC::class, 'destroy']);
});
//  Route pegawai End


//Route Absen strat
Route::middleware(['auth'])->group(function () {
    Route::get('/absen', [AbsenC::class, 'index']);
    Route::get('/absen/create', [AbsenC::class, 'create']);
    Route::post('/absen/store', [AbsenC::class, 'store']);
    Route::get('/absen/edit/{id}', [AbsenC::class, 'edit']); //pakai get karena baru nampilkan form id utk parameter
    Route::put('/absen/{id}', [AbsenC::class, 'update']);
    Route::delete('/absen/{id}', [AbsenC::class, 'destroy']);
});
//Route Absen end

// Route Jabatan strat
Route::middleware(['auth'])->group(function () {
    Route::get('/jabatan', [JabatanC::class, 'index']);
    Route::get('/jabatan/create', [JabatanC::class, 'create']);
    Route::post('/jabatan/store', [JabatanC::class, 'store']);
    Route::get('/jabatan/edit/{id}', [JabatanC::class, 'edit']);
    Route::put('/jabatan/{id}', [JabatanC::class, 'update']);
    Route::delete('/jabatan/{id}', [JabatanC::class, 'destroy']);
});
//Route Jabatan end

//Route Lembur start
Route::middleware(['auth'])->group(function () {
    Route::get('/lembur', [LemburC::class, 'index']);
    Route::get('/lembur/create', [LemburC::class, 'create']);
    Route::post('/lembur/store', [LemburC::class, 'store']);
    Route::get('/lembur/edit/{id}', [LemburC::class, 'edit']);
    Route::put('/lembur/{id}', [LemburC::class, 'update']);
    Route::delete('/lembur/{id}', [LemburC::class, 'destroy']);
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
