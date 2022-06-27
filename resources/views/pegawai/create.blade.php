@extends('layouts.master')



@section('content')

<div class="container">
    <h1 class="text-center">Halaman Tambah Data Pegawai</h1>
    <form action="/pegawai/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="createPegawai" class="form-label">NIP</label>
            <input type="text" name="id" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Alamat</label>
            <input type="text" name="Alamat" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Tempat Lahir</label>
            <input type="text" name="TempatLahir" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Tanggal Lahir</label>
            <input type="date" name="TanggalLahir" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Agama</label>
            <input type="text" name="Agama" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div>
        <label for="createPegawai">Jenis Kelamin</label>
        <br>
        <select class="form-select" name="JenisKelamin" id="createPegawai"><br>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L">Laki Laki</option>
            <option value="P">Perempuan</option>
        </select><br>
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Nomor HP</label>
            <input type="text" name="NoHP" class="form-control" id="createPegawai" aria-describedby="">
        </div>


        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">



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