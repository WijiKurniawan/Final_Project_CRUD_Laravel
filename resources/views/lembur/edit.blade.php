@extends('layouts.master')



@section('content')

<div class="container">
    <h1>Halaman Edit Lemburi</h1>
    <form action="/lembur/{{$lembur->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">id</label>
            <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$lembur->id}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$lembur->Nama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal</label>
            <input type="date" name="Tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$lembur->Tanggal}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jam  Lembur</label>
            <input type="text" name="JamLembur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$lembur->JamLembur}}">
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">





    </form>
</div>

@endsection