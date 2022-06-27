@extends('layouts.master')



@section('content')

<div class="container">
    <h1>Halaman Edit Riwayat Jabatan</h1>
    <form action="/pegawai/{{$pegawai->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">id</label>
            <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->id}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->Nama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">KodeJabatan</label>
            <input type="text" name="KodeJabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->KodeJabatan}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Mulai Jabatan</label>
            <input type="text" name="TanggalMulaiJabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->TanggalMulaiJabatan}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Akhir Jabatan</label>
            <input type="date" name="TanggalAkhirJabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->TanggalAkhirJabatan}}">
        </div>
        
        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">


    </form>
</div>