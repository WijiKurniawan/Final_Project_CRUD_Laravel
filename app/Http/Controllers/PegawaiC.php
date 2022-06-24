<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiC extends Controller
{
    public function index()
    {
        $data = PegawaiC::all();
        return view("pegawai.index", ['pegawai => $data']);
    }
}
