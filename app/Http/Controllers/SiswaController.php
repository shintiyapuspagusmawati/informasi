<?php

namespace App\Http\Controllers;

use App\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = siswa::all();
        return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $siswas =  new siswa();
            $siswas->nis = $request->nis;
            if ($request->hasfile('foto')) {
                $siswa = $request->file('foto');
                $extension = $siswa->getClientOriginalExtension();
                $filename = str_random(6).'.'.$extension;
                $destinationPath = public_path().'/img';
                $siswa->move($destinationPath, $filename);
                $siswas->foto = $filename; 
            }
            $siswas->nama_siswa = $request->nama_siswa;
            $siswas->jenis_kelamin = $request->jenis_kelamin;
            $siswas->tanggal_lahir = $request->tanggal_lahir;
            $siswas->id_kelas = $request->id_kelas;
            $siswas->jurusan_id = $request->jurusan_id;
            $siswas->alamat = $request->alamat;
            $siswas->no_telepon = $request->no_telepon;
            $siswas->save();
            return redirect()->route('siswa.index')->with('alert-success', 'Data Berhasil Disimpan.');
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
        //
        $siswas = siswa::findOrFail($id);
        return view('siswa.edit', compact('siswas'));
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
        //
            $siswas =  siswa::findOrFail($id);
            $siswas->nis = $request->nis;
            $siswas->foto = $request->foto;
            if ($request->hasfile('foto')) {
                $siswas = $request->file('foto');
                $extension = $siswas->getClientOriginalExtension();
                $filename = str_random(6).'.'.$extension;
                $destinationPath = public_path() . DIRECTORY_SEPERATOR . 'img';
                $siswas->move($destinationPath, $filename);
                $siswas->foto = $filename; 
            $siswas->nama_siswa = $request->nama_siswa;
            $siswas->jenis_kelamin = $request->jenis_kelamin;
            $siswas->tanggal_lahir = $request->tanggal_lahir;
            $siswas->id_mapel = $request->id_mapel;
            $siswas->alamat = $request->alamat;
            $siswas->no_telepon = $request->no_telepon;
            $siswas->save();
            return redirect()->route('siswa.index')->with('alert-success', 'Data Berhasil Diubah.');
    }
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
        $siswas = siswa::findOrFail($id);
         $siswas->delete();
         return redirect()->route('siswa.index')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
