@extends('layouts.master')



@section('content')

<br>
<div class="container">
    <h1 class="text-center">Halaman Tambah Data Absen</h1>
    <form action="/absen/store" method="POST">
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