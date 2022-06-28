@extends('layouts.master')



@section('content')


<div class="container">
    <h1 class="text-center">Halaman Create Lembur</h1>
    <form action="/lembur/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Tanggal</label>
            <input type="date" name="Tanggal" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Lama Jam Lembur</label>
            <input type="text" name="JamLembur" class="form-control" id="createPegawai" aria-describedby="">


            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
    </form>
</div>

@endsection