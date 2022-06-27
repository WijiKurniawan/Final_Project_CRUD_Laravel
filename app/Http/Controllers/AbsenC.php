<?php
//wiji gtg
namespace App\Http\Controllers;

use App\Models\Absen; //use model dulu
use Illuminate\Http\Request;

class AbsenC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absen = Absen::all(); //ambil semua data pada model absen dan simpan pada variable absen
        return view('absen.index', compact(['absen'])); // agar variabell absen bisa di pakai di indeex absen
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Absen::create($request->except(['_token', 'submit']));
        return redirect('/absen'); //agar kembali lagi ke halaman pegawai.index
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
        // dd($id);
        $absen = Absen::find($id); //untuk tampil data di hal. edit, maka tambah variabel peg., Panggil tabel model Pegawai find(id) 
        // dd($pegawai);
        return view('absen.edit', compact(['absen'])); //lempar var. $pegawai ke halaman view
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
        $absen = Absen::find($id);
        $absen->update($request->except(['_token', 'submit']));
        return redirect('/absen');
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
        $absen = Absen::find($id);
        //2 masukkan perintah delete
        $absen->delete();
        //3 redirect
        return redirect('/absen');
    }
}
