@extends('layouts.master')



@section('content')

<div class="container">
    <h1>Halaman Edit Absen</h1>
    <form action="/pegawai/{{$pegawai->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIP</label>
            <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->NIP}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->Nama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah Hadir</label>
            <input type="text" name="JumlahHadir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->Alamat}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah Sakit</label>
            <input type="text" name="JumlahSakit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->TempatLahir}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah Izin</label>
            <input type="date" name="JumlahIzin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->TanggalLahir}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"Jumlah Tanpa Keterangan</label>
            <input type="text" name="JumlahTanpaKeterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->Agama}}">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">

        </form>
</div>

@endsection
