@extends('layouts.app')

@section('title','absen')

@section('content')
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Web Kepegawaian</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Absen</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lainnya
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="{{url('pegawai')}}">Pegawai</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('lembur')}}">Lembur</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('jabatan')}}">Jabatan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('riwayatjabatan')}}">Riwayat jabatan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('pendidikan')}}">Pendidikan</a></li>
            <li><hr class="dropdown-divider"></li>
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
  

  <body>
    <div class="container">
      <a class="btn btn-primary" href="/absen/create"> + Tambah Data Absen Baru</a>
      <br>
      <br>
      <table class="table table-hover">
        <tr>
          <th>NIP</th>
          <th>Nama</th>
          <th>Jumlah Hadir</th>
          <th>Jumlah Sakit</th>
          <th>Jumlah Izin</th>
          <th>Jumlah Tanpa Keterangan</th>
        </tr>
        @foreach($absen as $a)
        <tr>
          <td>{{$a->id}}</td>
          <td>{{$a->Nama}}</td>
          <td>{{$a->JumlahHadir}}</td>
          <td>{{$a->JumlahSakit}}</td>
          <td>{{$a->JumlahIzin}}</td>
          <td>{{$a->JumlahTanpaKeterangan}}</td>
          <td>
            <a class="btn btn-warning" href="/pegawai/edit/{{ $a->id }}">Edit</a>
            <form action="/absen/{{$a->id}}" method="POST">
              <!--ini untuk pilihh yg mana tabel yg nk dihapus -->
              @csrf
              @method('delete')
              <input type="submit" class="btn btn-danger" value="Delete">
            </form>
          </td>
        </tr>
        @endforeach
      </table>
    </div>

  </body>
@endsection