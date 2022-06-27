@extends('layouts.master')



@section('content')

<div class="container">
    <h1 class="text-center">Halaman Tambah Data Absen</h1>
    <form action="/absen/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="createPegawai" class="form-label">NIP</label>
            <input type="text" name="id" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Jumlah Hadir</label>
            <input type="text" name="JumlahHadir" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Jumlah Sakit</label>
            <input type="text" name="JumlahSakit" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Jumlah Izin</label>
            <input type="text" name="JumlahIzin" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Jumlah Tanpa Keterangan</label>
            <input type="text" name="JumlahTanpaKeterangan" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        

        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
        </form>
</div>

@endsection