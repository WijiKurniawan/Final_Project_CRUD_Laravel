@extends('layouts.master')



@section('content')

<div class="container">
    <h1>Halaman Edit Pendidikan Pegawai</h1>
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
            <label for="exampleInputEmail1" class="form-label">Pendidikan</label>
            <input type="text" name="Pendidikan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->Pendidikan}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Instansi</label>
            <input type="text" name="NamaInstansi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->NamaInstansi}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jurusan</label>
            <input type="date" name="Jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->Jurusan}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">IPK</label>
            <input type="text" name="IPK" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->IPK}}">
        </div>


        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">





    </form>
</div>

@endsection