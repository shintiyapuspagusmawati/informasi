<?php

namespace App\Http\Controllers;

use App\siswa;
use App\kelas;
use App\jurusan;
use App\user;
use App\Role;
use App\Http\Requests\SiswaRequest;
use Illuminate\Http\Request;
use DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = DB::table('siswas')->join('jurusans','jurusans.id','=','siswas.jurusan_id')->join('kelas','kelas.id','=','siswas.id_kelas')->select('siswas.*','jurusans.jurusan','kelas.kelas')->get();
        return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas=kelas::all();
        $jurusan=jurusan::all();
        return view('siswa.create', compact('kelas','jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiswaRequest $request)
    {
        //
            $user= new user();
            $user->name = $request->nama_siswa;
            $user->email = $request->email;
            $user->password =bcrypt($request->password);
            $user->is_verified = 1;
            $user->save();
            $siswaRole = Role::where('name', 'siswa')->first();
            $user->attachRole($siswaRole);

            $siswas =  new siswa();
            $siswas->id = $user->id;
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
            $siswas->email = $request->email;
            $siswas->password = bcrypt($request->password);
            $siswas->save();

            
            return redirect('/admin/siswa')->with('alert-success', 'Data Berhasil Disimpan.');
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
        $siswas = siswa::findOrFail($id);
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        return view('siswa.show', compact('siswas','kelas','jurusan'));
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
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        return view('siswa.edit', compact('siswas','kelas','jurusan'));
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
            $siswas->foto = $request->foto;
            if ($request->hasfile('foto'))
             {

                $siswa = $request->file('foto');
                $extension = $siswa->getClientOriginalExtension();
                $filename = str_random(6).'.'.$extension;
                $destinationPath = public_path().'/img';
                $siswa->move($destinationPath, $filename);
                $siswas->foto = $filename;
                $siswas->save();
            }
            $siswas->nama_siswa = $request->nama_siswa;
            $siswas->jenis_kelamin = $request->jenis_kelamin;
            $siswas->tanggal_lahir = $request->tanggal_lahir;
            $siswas->alamat = $request->alamat;
            $siswas->no_telepon = $request->no_telepon;
            $siswas->save();
            return redirect()->route('siswa.index')->with('alert-success', 'Data Berhasil Diubah.');
    
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
