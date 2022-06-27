@extends('layouts.master')



@section('content')

<div class="container">
    <h1>Halaman Edit Pengalaman Kerja</h1>
    <form action="/pegawai/{{$pegawai->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">id</label>
            <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengalamankerja->id}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengalamankerja->Nama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Perusahaan</label>
            <input type="text" name="NamaPerusahaan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengalamankerja->NamaPerusahaan}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tahun</label>
            <input type="text" name="Tahun" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengalamankerja->Tahun}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jabatan Lama</label>
            <input type="date" name="Jabatan Lama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengalamankerja->Jabatan Lama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lama Bekerja</label>
            <input type="text" name="Lama Bekerja" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengalamankerja->Lama Bekerja}}">
        </div>
        
        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">


    </form>
</div>

@endsection