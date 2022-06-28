@extends('layouts.master')



@section('content')

<br>
<div class="container">
    <h1 class="text-center">Halaman Edit Data Absen</h1>
    <form action="/absen/{{$absen->id}}" method="POST">
    @method('put')
         @csrf
                        <div class="mb-3">
                            <label for="Nama" class="form-label">Masukan Nama Pegawai</label>
                            <input type="text" class="form-control" id="Nama" name="Nama">
                        </div>
                        <div class="mb-1">
                            <label for="nama_pegawai" class="form-label">Masukan Keterangan</label>
                        </div>
                        <div class="form-check form-check-success">
                            <input class="form-check-input" type="radio" name="keterangan" id="Success" value="Hadir" checked>
                            <label class="form-check-label" for="Success">
                                Hadir
                            </label>
                        </div>
                        <div class="form-check form-check-warning">
                            <input class="form-check-input" type="radio" name="keterangan" id="Warning" value="Izin" checked>
                            <label class="form-check-label" for="Warning">
                                Izin
                            </label>
                        </div>
                        <div class="form-check form-check-danger">
                            <input class="form-check-input" type="radio" name="keterangan" id="Danger" value="Sakit" checked>
                            <label class="form-check-label" for="Danger">
                                Sakit
                            </label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>               
        
</div>

@endsection























<!-- @extends('layouts.master')



@section('content')

<div class="container">
    <h1>Halaman Edit Absen</h1>
    <form action="/absen/{{$absen->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIP</label>
            <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$absen->id}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$absen->Nama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah Hadir</label>
            <input type="text" name="JumlahHadir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$absen->JumlahHadir}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah Sakit</label>
            <input type="text" name="JumlahSakit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$absen->JumlahSakit}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah Izin</label>
            <input type="text" name="JumlahIzin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$absen->JumlahIzin}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah Tanpa Keterangan</label>
            <input type="text" name="JumlahTanpaKeterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$absen->JumlahTanpaKeterangan}}">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">

        </form>
</div>

@endsection -->
