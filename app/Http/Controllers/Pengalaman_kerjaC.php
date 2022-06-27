<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman_kerja;

use Illuminate\Http\Request;

class Pengalaman_kerjaC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengalamankerja = Pengalaman_kerja::all(); //ambil semua data pada model absen dan simpan pada variable absen
        return view('pengalamankerja.index', compact(['pengalamankerja'])); // agar variabell absen bisa di pakai di indeex absen
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengalamankerja.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pengalaman_kerja::create($request->except(['_token', 'submit']));
        return redirect('/pengalamankerja'); //agar kembali lagi ke halaman jabatan.index
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
        $pengalamankerja = Pengalaman_kerja::find($id); //untuk tampil data di hal. edit, maka tambah variabel peg., Panggil tabel model Pegawai find(id) 
        // dd($pegawai);
        return view('pengalamankerja.edit', compact(['pengalamankerja'])); //lempar var. $pegawai ke halaman view
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
        $pengalamankerja = Pengalaman_kerja::find($id);
        $pengalamankerja->update($request->except(['_token', 'submit']));
        return redirect('/pengalamankerja');
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
        $pengalamankerja = Pengalaman_kerja::find($id);
        //2 masukkan perintah delete
        $pengalamankerja->delete();
        //3 redirect
        return redirect('/penglamankerja');
    }
}
