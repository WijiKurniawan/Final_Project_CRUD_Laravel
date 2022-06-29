@extends('layouts.master')

@section('content')

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="#">DASHBOARD KEPEGAWAIAN</a>

    <ul class="navbar-nav ms-auto">
      <!-- Authentication Links -->
      @guest
      @if (Route::has('login'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @endif

      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
      @endif
      @else
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
        </a>



        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </li>
      @endguest
    </ul>
    <li class="nav-item">

    </li>
    </ul>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Kepegawaian</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body ">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown text-black">
            <a class="nav-link dropdown-toggle text-black " href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu text-black" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="{{url('pegawai')}}">Pegawai</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
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
              <li><a class="dropdown-item" href="{{url('riwayat_jabatan')}}">Riwayat jabatan</a></li>
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
        </ul>

      </div>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<div class="row container-fluid"">
<<<<<<< HEAD
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pegawai</h5>
        <p class="card-text">Kumpulan data pegawai</p>
        <a href="{{url('pegawai')}}" class="btn btn-primary">Lihat</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Absen</h5>
        <p class="card-text">Kumpulan data absensi pegawai</p>
        <a href="{{url('absen')}}" class="btn btn-primary">Lihat</a>
      </div>
=======
  <div class=" col-sm-6">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Pegawai</h5>
      <p class="card-text">Di halaman ini user dapat menambah data pegawai</p>
      <a href="{{url('pegawai')}}" class="btn btn-primary">Telusuri</a>
>>>>>>> 35d67218212528e9580d9571de7691104855b67e
    </div>
  </div>
</div>
<div class="col-sm-6">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Absen</h5>
      <p class="card-text">Di halaman ini user dapat menambah data kehadiran pegawai</p>
      <a href="{{url('absen')}}" class="btn btn-primary">Telusuri</a>
    </div>
  </div>
</div>
</div>
<br>
<br>
<div class="row container-fluid">
  <div class=" col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pendidikan Pegawai</h5>
<<<<<<< HEAD
        <p class="card-text">Kumpulan data pendidikan pegawai</p>
        <a href="{{url('pendidikan')}}" class="btn btn-primary">Lihat</a>
=======
        <p class="card-text">Di halaman ini user dapat menambah data pendidikan pegawai</p>
        <a href="{{url('pendidikan')}}" class="btn btn-primary">Halaman Pendidikan Pegawai</a>
>>>>>>> 35d67218212528e9580d9571de7691104855b67e
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lembur</h5>
<<<<<<< HEAD
        <p class="card-text">Kumpulan data lembur pegawai</p>
        <a href="{{url('lembur')}}" class="btn btn-primary">Lihat</a>
=======
        <p class="card-text">Di halaman ini user dapat menambah dapat menambah data lembur pegawai</p>
        <a href="{{url('lembur')}}" class="btn btn-primary">Halaman Lembur</a>
>>>>>>> 35d67218212528e9580d9571de7691104855b67e
      </div>
    </div>
  </div>
</div>
<br>
<br>
<div class="row container-fluid">
  <div class=" col-sm-6">
    <div class="card">
      <div class="card-body">
<<<<<<< HEAD
        <h5 class="card-title">Jabatan</h5>
        <p class="card-text">Kumpulan data jabatan pegawai</p>
        <a href="{{url('jabatan')}}" class="btn btn-primary">Lihat</a>
=======
        <h5 class="card-title">JABATAN</h5>
        <p class="card-text">Di halaman ini user dapat menambah data jabatan pegawai</p>
        <a href="{{url('jabatan')}}" class="btn btn-primary">Halaman Riwayat Jabatan</a>
>>>>>>> 35d67218212528e9580d9571de7691104855b67e
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
<<<<<<< HEAD
        <h5 class="card-title">Riwayat Jabatan</h5>
        <p class="card-text">Kumpulan data riwayat jabatan pegawai</p>
        <a href="{{url('riwayat_jabatan')}}" class="btn btn-primary">Lihat</a>
=======
        <h5 class="card-title">RIWAYAT JABATAN</h5>
        <p class="card-text">Di halaman ini user dapat menambah data riwayat jabatan pegawai</p>
        <a href="{{url('riwayat_jabatan')}}" class="btn btn-primary">Telusuri</a>
>>>>>>> 35d67218212528e9580d9571de7691104855b67e
      </div>
    </div>
  </div>
</div>
<br>
<br>
<div class="row container-fluid"">
<<<<<<< HEAD
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
          <h5 class="card-title">Pengalaman Kerja</h5>
        <p class="card-text">Kumpulan data pengalaman kerja pegawai</p>
        <a href="{{url('pengalamankerja')}}" class="btn btn-primary">Lihat</a>
      </div>
=======
  <div class=" col-sm-6">
  <div class="card">
    <div class="card-body">

      <h5 class="card-title">Pengalaman Kerja</h5>
      <p class="card-text">Di halaman ini user dapat menambah data pengalaman kerja pegawai</p>
      <a href="{{url('pengalamankerja')}}" class="btn btn-primary">Lihat</a>
>>>>>>> 35d67218212528e9580d9571de7691104855b67e
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>










<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection