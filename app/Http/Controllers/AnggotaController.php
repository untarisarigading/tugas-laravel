<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = DB::table('anggota')->get();
        return view('perpustakaan.anggota.index', compact('anggota'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perpustakaan.anggota.anggota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $request->validate([
            'id'=>'required',
            'kode'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'jurusan'=>'required',
            'no_telp'=>'required',
            'alamat'=>'required',
        
        ]);

        $query=DB::table('anggota')->insert([
            'id'=>$request['id'],
            'kode_anggota'=>$request['kode'],
            'nama_anggota'=>$request['nama'],
            'jk_anggota'=>$request['jk'],
            'jurusan_anggota'=>$request['jurusan'],
            'no_telp_anggota'=>$request['no_telp'],
            'alamat_anggota'=>$request['alamat'],
        ]);

        return redirect('/anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id) 
    {
        //
        // SELECT * FROM anggota where id = $id 
        $anggota = DB::table('anggota')->where('id', $id)->get(); 
        return view('perpustakaan.anggota.show', compact('anggota'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $anggota = DB::table('anggota')->where('id', $id)->get();
        return view('perpustakaan.anggota.edit', compact('anggota')); 
    }

    /**
     * Remove the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'jurusan'=>'required',
            'no_telp_anggota'=>'required',
            'alamat'=>'required',
        ]);

        $query = DB::table('anggota')->where('id', $id)->update([
            //'field yang ada di table' => $request['name yang dikirim dari form']
            'kode_anggota'=>$request['kode'],
            'nama_anggota'=>$request['nama'],
            'jk_anggota'=>$request['jk'],
            'jurusan_anggota'=>$request['jurusan'],
            'no_telp_anggota'=>$request['no_telp_anggota'],
            'alamat_anggota'=>$request['alamat'],
        ]);

        return redirect()->route('perpustakaan.anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $query = DB::table('anggota')->where('id', $id)->delete();
        return redirect()->route('perpustakaan.anggota.index');
    }
}
