<?php

namespace App\Http\Controllers;

use App\Models\Riwayat_jabatan;
use Illuminate\Http\Request;

class Riwayat_jabatanC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riwayatjabatan = Riwayat_jabatan::all(); //ambil semua data pada model absen dan simpan pada variable absen
        return view('riwayatjabatan', compact(['riwayatjabatan'])); // agar variabell absen bisa di pakai di indeex absen
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('riwayatjabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Riwayat_jabatan::create($request->except(['_token', 'submit']));
        return redirect('/riwayatjabatan'); //agar kembali lagi ke halaman jabatan.index
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
        $riwayatjabatan = Riwayat_jabatan::find($id); //untuk tampil data di hal. edit, maka tambah variabel peg., Panggil tabel model Pegawai find(id) 
        // dd($pegawai);
        return view('riwayatjabatan.edit', compact(['riwayatjabatan'])); //lempar var. $pegawai ke halaman view
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
        $riwayatjabatan = Riwayat_jabatan::find($id);
        $riwayatjabatan->update($request->except(['_token', 'submit']));
        return redirect('/riwayatjabatan');
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
        $riwayatjabatan = Riwayat_jabatan::find($id);
        //2 masukkan perintah delete
        $riwayatjabatan->delete();
        //3 redirect
        return redirect('/riwayatjabatan');
    }
}
