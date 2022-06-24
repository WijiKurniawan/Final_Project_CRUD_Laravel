<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LemburC extends Controller
{
    public function index(){
        $data = LemburC::all();
        return view("lembur.index",['lembur => $data']);
    }
}
