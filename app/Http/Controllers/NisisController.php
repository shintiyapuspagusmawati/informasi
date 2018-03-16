<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NilaiRequest;
use App\nilai;
use App\siswa;
use App\mapel;
use App\guru;
use Auth;
use DB;

class NisisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $nilai = nilai::where('id_siswa', Auth::user()->id)->get();
        return view('nisis.index', compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $siswa    = siswa::all();
        $id_mapel = guru::where('id_user', Auth::user()->id)->first()->id_mapel;
        $mapel    = mapel::where('id',$id_mapel)->firstOrFail();
        return view('nisis.create', compact('mapel','siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NilaiRequest $request)
    {
        //
            $nilai =  new nilai();
            $nilai->id_siswa = $request->id_siswa;
            $nilai->id_mapel = $request->id_mapel;
            $nilai->kkm = $request->kkm;
            $nilai->uh1 = $request->uh1;
            $nilai->uh2 = $request->uh2;
            $nilai->uh3 = $request->uh3;
            $nilai->uh4 = $request->uh4;
            $nilai->uts = $request->uts;
            $nilai->uas = $request->uas;
            $nilai->save();
            return redirect()->route('nisis.index')->with('alert-success', 'Data Berhasil Disimpan.');
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
        $siswa = siswa::all();
        $mapel= mapel::where('id', Auth::user()->id)->firstOrFail();
        $nilai = nilai::findOrFail($id);
        return view('nisis.show')->with(compact('nilai','siswa','mapel'));
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
        $siswa = siswa::all();
        $mapel= mapel::where('id', Auth::user()->id)->firstOrFail();
        $nilai = nilai::findOrFail($id);
        return view('nisis.edit')->with(compact('nilai','siswa','mapel'));
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
            $nilai = nilai::findOrFail($id);
            $nilai->id_siswa = $request->id_siswa;
            $nilai->id_mapel = $request->id_mapel;
            $nilai->kkm = $request->kkm;
            $nilai->uh1 = $request->uh1;
            $nilai->uh2 = $request->uh2;
            $nilai->uh3 = $request->uh3;
            $nilai->uh4 = $request->uh4;
            $nilai->uts = $request->uts;
            $nilai->uas = $request->uas;
            $nilai->save();
            return redirect()->route('nisis.index')->with('alert-success', 'Data Berhasil Disimpan.');
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
        nilai::destroy($id);
        return redirect()->route('nisis.index');
    }
}
