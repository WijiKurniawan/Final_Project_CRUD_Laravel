@extends('layouts.master')

@section('title','data pegawai')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Web Kepegawaian</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Pegawai</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Lainnya
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="{{url('absen')}}">Absen</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="{{url('lembur')}}">Lembur</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="{{url('jabatan')}}">Jabatan</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="{{url('riwayatjabatan')}}">Riwayat jabatan</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="{{url('pendidikan')}}">Pendidikan</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="{{url('pengalamankerja')}}">Pengalaman Kerja</a></li>

            </ul>
          </li>
          <li class="nav-item">

          </li>
        </ul>
      </div>
    </div>
  </nav>


  <br />
  <br />

  <body>
    <div class="container">
      <a class="btn btn-primary" href="/pegawai/create"> + Tambah Pegawai Baru</a>
      <table class="table table-hover">
        <tr>
          <th>id</th>
          <th>NIP</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>TempatLahir</th>
          <th>TanggalLahir</th>
          <th>Agama</th>
          <th>Jenis Kelamin</th>
          <th>No.HP</th>
          <th>Opsi</th>
        </tr>
        @foreach($pegawai as $p)
        <tr>
          <td>{{$p->id}}</td>
          <td>{{$p->NIP}}</td>
          <td>{{$p->Nama}}</td>
          <td>{{$p->Alamat}}</td>
          <td>{{$p->TempatLahir}}</td>
          <td>{{$p->TanggalLahir}}</td>
          <td>{{$p->Agama}}</td>
          <td>{{$p->JenisKelamin}}</td>
          <td>{{$p->NoHP}}</td>
          <td>
            <a class="btn btn-danger" href="/pegawai/edit/{{ $p->id }}">Edit</a>
            |
            <a class="btn btn-warning" href="/pegawai/hapus/{{ $p->id }}">Hapus</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>

  </body>


  @endsection