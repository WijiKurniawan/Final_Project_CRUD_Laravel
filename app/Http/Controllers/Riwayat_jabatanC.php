<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Riwayat_jabatanC extends Controller
{
    public function index(){
        $data = Riwayat_jabatanC::all();
        return view("riwayat_jabatan.index",['riwayat_jabatan => $data']);
    }
}
