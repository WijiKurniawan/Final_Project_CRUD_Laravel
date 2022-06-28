@extends('layouts.master')



@section('content')

<div class="container">
    <br>
    <h1 class="text-center">Halaman Edit Pendidikan Pegawai</h1>
    <form action="/pendidikan/{{$pendidikan->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pendidikan->Nama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pendidikan</label>
            <input type="text" name="Pendidikan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pendidikan->Pendidikan}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Instansi</label>
            <input type="text" name="NamaInstansi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pendidikan->NamaInstansi}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jurusan</label>
            <input type="text" name="Jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pendidikan->Jurusan}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">IPK</label>
            <input type="text" name="IPK" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pendidikan->IPK}}">
        </div>


        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">





    </form>
</div>

@endsection