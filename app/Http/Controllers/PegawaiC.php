<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiC extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all(); //ambil semua data dari model Pegawai dan simpan dalam variabel $pegawai
        return view('pegawai.index', compact(['pegawai'])); // agar variabel $pegawai bisa di pakai di index
    }
}
