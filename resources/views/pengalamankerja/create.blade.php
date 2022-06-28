@extends('layouts.master')



@section('content')

<div class="container">
    <br>
    <h1 class="text-center">Halaman Create Pengalaman Kerja</h1>
    <form action="/pengalamankerja/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Nama Perusahaan</label>
            <input type="text" name="NamaPerusahaan" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Tahun</label>
            <input type="text" name="Tahun" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Jabatan Lama</label>
            <input type="text" name="JabatanLama" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Lama Bekerja</label>
            <input type="text" name="LamaBekerja" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        
        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
        </form>
</div>

@endsection