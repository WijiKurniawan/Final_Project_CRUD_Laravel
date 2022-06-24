<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenC extends Controller
{
    public function index(){
        $data = AbsenC::all();
        return view("absen.index",['absen => $data']);
    }
}
