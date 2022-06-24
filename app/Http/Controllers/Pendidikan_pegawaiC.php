<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pendidikan_pegawaiC extends Controller
{
    public function index(){
        $data = Pendidikan_pegawaiC::all();
        return view("pendidikan_pegawai.index",['pendidikan_pegawai => $data']);
    }
}
