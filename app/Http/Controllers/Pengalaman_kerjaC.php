<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pengalaman_kerjaC extends Controller
{
    public function index(){
        $data = Pengalaman_kerjaC::all();
        return view("pengalaman_kerja.index",['pengalaman_kerja => $data']);
    }
}
