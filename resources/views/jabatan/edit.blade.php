@extends('layouts.master')



@section('content')

<div class="container">
    <br>
    <h1 class="text-center" >Halaman Edit Data Jabatan</h1>
    <form action="/jabatan/{{$jabatan->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$jabatan->Nama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kode Jabatan</label>
            <input type="text" name="KodeJabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$jabatan->KodeJabatan}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Jabatan</label>
            <input type="text" name="NamaJabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$jabatan->NamaJabatan}}">
        </div>


        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
    </form>
</div>

@endsection

