<?php

namespace App\Http\Controllers;

use App\guru;
use App\mapel;
use App\kelas;
use App\Role;
use App\user;
use App\Http\Requests\GuruRequest;
use Illuminate\Http\Request;
use DB;
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = DB::table('gurus')->join('mapels','gurus.id_mapel','=','mapels.id')->select('gurus.*', 'mapels.name')->get();
        return view('guru.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas=kelas::all();
        $a= mapel::all();
        return view('guru.create',compact('a','kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuruRequest $request)
    {
        //
            // return $request->id_kelas;
            $user= new user();
            $user->name = $request->nama_guru;
            $user->email = $request->email;
            $user->password =bcrypt($request->password);
            $user->is_verified = 1;
            $user->save();
            $guruRole = Role::where('name', 'guru')->first();
            $user->attachRole($guruRole);
            $gurus =  new guru();
            $gurus->id_user = $user->id;
            $gurus->nipg = $request->nipg;
            if ($request->hasfile('foto')) {
                $guru = $request->file('foto');
                $extension = $guru->getClientOriginalExtension();
                $filename = str_random(6).'.'.$extension;
                $destinationPath = public_path().'/img';
                $guru->move($destinationPath, $filename);
                $gurus->foto = $filename; 
            }
            foreach ($request->id_kelas as $index => $value) {
                $data[$index]= $value;
            }
            $gurus->nama_guru = $request->nama_guru;
            $gurus->jenis_kelamin = $request->jenis_kelamin;
            $gurus->tanggal_lahir = $request->tanggal_lahir;
            $gurus->kelas = $data;
            $gurus->id_mapel = $request->id_mapel;
            $gurus->alamat = $request->alamat;
            $gurus->no_telepon = $request->no_telepon;
            $gurus->email = $request->email;
            $gurus->password = $request->password;
            $gurus->save();

           
            return redirect()->route('guru.index')->with('alert-success', 'Data Berhasil Ditambah.');
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
        $gurus = guru::findOrFail($id);
        $a =  mapel::all(); 
        return view('guru.show', compact('gurus','a'));
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
        $gurus = guru::findOrFail($id);
        $kelas = kelas::all();
        $a =  mapel::all(); 
        return view('guru.edit', compact('gurus','a','kelas'));
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
            $gurus =  guru::findOrFail($id);
            $gurus->foto = $request->foto;
            if ($request->hasfile('foto')) {
                $guru = $request->file('foto');
                $extension = $guru->getClientOriginalExtension();
                $filename = str_random(6).'.'.$extension;
                $destinationPath = public_path().'/img';
                $guru->move($destinationPath, $filename);
                $gurus->foto = $filename; 
            }
            foreach ($request->id_kelas as $index => $value) {
                $data[$index]= $value;
            }
            $gurus->kelas = $data;
            $gurus->nama_guru = $request->nama_guru;
            $gurus->jenis_kelamin = $request->jenis_kelamin;
            $gurus->tanggal_lahir = $request->tanggal_lahir;
            $gurus->id_mapel = $request->id_mapel;
            $gurus->alamat = $request->alamat;
            $gurus->no_telepon = $request->no_telepon;
            $gurus->email = $request->email;
            $gurus->password = $request->password;
            $gurus->save();
         return redirect()->route('guru.index')->with('alert-success', 'Data Berhasil Diubah.');
    
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
        $gurus = guru::findOrFail($id);
         $gurus->delete();
         return redirect()->route('guru.index')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
