<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Session\Store;
//strat import Controller
use App\Http\Controllers\PegawaiC;
use App\Http\Controllers\AbsenC;
use App\Http\Controllers\JabatanC;
use App\Http\Controllers\LemburC;
use App\Http\Controllers\Pendidikan_pegawaiC;
use App\Http\Controllers\Pengalaman_kerjaC;
use App\Http\Controllers\Riwayat_jabatanC;



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
//Route Lembur End

//Route pendidikan pegawai start
Route::middleware(['auth'])->group(function () {
    Route::get('/pendidikan', [Pendidikan_pegawaiC::class, 'index']);
    Route::get('/pendidikan/create', [Pendidikan_pegawaiC::class, 'create']);
    Route::post('/pendidikan/store', [Pendidikan_pegawaiC::class, 'store']);
    Route::get('/pendidikan/edit/{id}', [Pendidikan_pegawaiC::class, 'edit']);
    Route::put('/pendidikan/{id}', [Pendidikan_pegawaiC::class, 'update']);
    Route::delete('/pendidikan/{id}', [Pendidikan_pegawaiC::class, 'destroy']);
});
//route pendidikan pegawai end

//route pengalaman kerja start
Route::middleware(['auth'])->group(function () {
    Route::get('/pengalamankerja', [Pengalaman_kerjaC::class, 'index']);
    Route::get('/pengalamankerja/create', [Pengalaman_kerjaC::class, 'create']);
    Route::post('/pengalamankerja/store', [Pengalaman_kerjaC::class, 'store']);
    Route::get('/pengalamankerja/edit/{id}', [Pengalaman_kerjaC::class, 'edit']);
    Route::put('/pengalmankerja/{id}', [Pengalaman_kerjaC::class, 'update']);
    Route::delete('/pengalamankerja/{id}', [Pengalaman_kerjaC::class, 'destroy']);
});
// route penglaman kerja end

// route riwayat jabatan strat
Route::middleware(['auth'])->group(function () {
    Route::get('/riwayatjabatan', [Riwayat_jabatanC::class, 'index']);
    Route::get('/riwayatjabatan/create', [Riwayat_jabatanC::class, 'create']);
    Route::post('/riwayatjabatan/store', [Riwayat_jabatanC::class, 'store']);
    Route::get('/riwayatjabatan/edit/{id}', [Riwayat_jabatanC::class, 'edit']);
    Route::put('/riwayatjabatan/{id}', [Riwayat_jabatanC::class, 'update']);
    Route::delete('/riwayatjabatan/{id}', [Riwayat_jabatanC::class, 'destroy']);
});
//route riwayatjabatan end







// Route::get('/pegawai', [PegawaiC::class, 'index']);
// Route::get('/pegawai', [JabatanC::class, 'index']);
// Route::get('/pegawai', [AbsenC::class, 'index']);
// Route::get('/pegawai', [LemburC::class, 'index']);
// Route::get('/pegawai', [Pendidikan_pegawaiC::class, 'index']);
// Route::get('/pegawai', [Pengalaman_kerjaC::class, 'index']);
// Route::get('/pegawai', [Riwayat_jabatanC::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
