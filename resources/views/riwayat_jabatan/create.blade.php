@extends('layouts.master')



@section('content')

<div class="container">
    <h1 class="text-center">Halaman Create</h1>
    <form action="/riwayat_jabatan/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="createPegawai" class="form-label">id</label>
            <input type="text" name="id" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Kode Jabatan</label>
            <input type="text" name="KodeJabatan" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Tanggal Mulai Jabatan</label>
            <input type="date" name="TanggalMulaiJabatan" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Tanggal Akhir Jabatan</label>
            <input type="date" name="TanggalAkhirJabatan" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        


        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">



</form>
</div>

@endsection