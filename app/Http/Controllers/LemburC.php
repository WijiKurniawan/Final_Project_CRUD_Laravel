<?php

namespace App\Http\Controllers;


use App\Models\Lembur;
use Illuminate\Http\Request;

class LemburC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lembur = Lembur::all(); //ambil semua data pada model absen dan simpan pada variable absen
        return view('lembur.index', compact(['lembur'])); // agar variabell absen bisa di pakai di indeex absen
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lembur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lembur::create($request->except(['_token', 'submit']));
        return redirect('/lembur'); //agar kembali lagi ke halaman jabatan.index
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
        $lembur = Lembur::find($id); //untuk tampil data di hal. edit, maka tambah variabel peg., Panggil tabel model Pegawai find(id) 
        // dd($pegawai);
        return view('lembur.edit', compact(['lembur'])); //lempar var. $pegawai ke halaman view
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
        $lembur = Lembur::find($id);
        $lembur->update($request->except(['_token', 'submit']));
        return redirect('/lembur');
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
        $lembur = Lembur::find($id);
        //2 masukkan perintah delete
        $lembur->delete();
        //3 redirect
        return redirect('/lembur');
    }
}
