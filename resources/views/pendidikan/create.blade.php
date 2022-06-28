@extends('layouts.master')



@section('content')

<div class="container">
    <h1 class="text-center">Halaman Create Pendidikan</h1>
    <form action="/pendidikan/store" method="POST">
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
            <label for="createPegawai" class="form-label">Pendidikan</label>
            <input type="text" name="Pendidikan" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Nama Instansi</label>
            <input type="text" name="NamaInstansi" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Jurusan</label>
            <input type="text" name="Jurusan" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">IPK</label>
            <input type="text" name="IPK" class="form-control" id="createPegawai" aria-describedby="">
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
        </form>
</div>

@endsection
