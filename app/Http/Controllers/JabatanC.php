<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanC extends Controller
{
    public function index(){
        $data = JabatanC::all();
        return view("jabatan.index",['jabatan => $data']);
    }
}
