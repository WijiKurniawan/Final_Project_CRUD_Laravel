@extends('layouts.master')



@section('content')

<div class="container">
    <h1>Halaman Edit Data Pegawai</h1>
    <form action="/pegawai/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIP</label>
            <input type="text" name="NIP" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->NIP}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->Nama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input type="text" name="Alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->Alamat}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
            <input type="text" name="TempatLahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->TempatLahir}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
            <input type="date" name="TanggalLahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->TanggalLahir}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Agama</label>
            <input type="text" name="Agama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->Agama}}">
        </div>
        <select class="form-select" name="JenisKelamin"><br>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L" @if($pegawai->JenisKelamin == "L") selected >Laki Laki</option>
            <option value="P">Perempuan</option>
        </select><br>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
            <input type="text" name="NoHP" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>


        <input type="submit" name="submit" value="Simpan">



        <!-- <form action="/pegawai/store" method ="POST">
        @csrf
        <input type="text" name="NIP" placeholder="NIP"><br>
        <input type="text" name="Nama" placeholder="Nama"><br>
        <textarea name="Alamat" id="" cols="30" rows="10"></textarea><br>
        <input type="text" name="TempatLahir" placeholder="Tempat Lahir"><br>
        <input type="date" name="TanggalLahir" placeholder="Tanggal Lahir"><br>
        <input type="text" name="Agama" placeholder="Agama"><br>
        <select class= "form" name="JenisKelamin"><br>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki Laki</option>
                <option value="P">Perempuan</option>
            </select><br>
        <input type="text" name="NoHP" placeholder="Nomor HP"><br>
        <input type="submit" name="submit" value="Simpan">
        </form> -->



    </form>
</div>

@endsection