<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan_pegawai;
use Illuminate\Http\Request;

class Pendidikan_pegawaiC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidikan = Pendidikan_pegawai::all(); //ambil semua data pada model absen dan simpan pada variable absen
        return view('pendidikan.index', compact(['pendidikan'])); // agar variabell absen bisa di pakai di indeex absen
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pendidikan_pegawai::create($request->except(['_token', 'submit']));
        return redirect('/pendidikan'); //agar kembali lagi ke halaman jabatan.index
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendidikan = Pendidikan_pegawai::find($id); //untuk tampil data di hal. edit, maka tambah variabel peg., Panggil tabel model Pegawai find(id) 
        // dd($pegawai);
        return view('pendidikan.edit', compact(['pendidikan'])); //lempar var. $pegawai ke halaman view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pendidikan = Pendidikan_pegawai::find($id);
        $pendidikan->update($request->except(['_token', 'submit']));
        return redirect('/pendidikan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //1 data yang di ambil pilih dlu
        $pendidikan = Pendidikan_pegawai::find($id);
        //2 masukkan perintah delete
        $pendidikan->delete();
        //3 redirect
        return redirect('/pendidikan');
    }
}
