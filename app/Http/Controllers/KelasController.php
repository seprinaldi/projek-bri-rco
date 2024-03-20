<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kelas.index', [
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create', [
            'kelas' => Kelas::all()
        ]);
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
            'jurusan' => 'required',
            'fakultas' => 'required',
            'nama_kelas' => 'required',
            'tingkat' => 'required',
                         
        ]);

        Kelas::create([
            'jurusan' => $request->jurusan,
            'role' => $request->role,
            'fakultas' => $request->fakultas,
            'nama_kelas' =>$request->nama_kelas,
            'tingkat' =>$request->tingkat,
        ]);

        Alert::success('Berhasil!', 'Berhasil disimpan')->showConfirmButton('Ok', '#FFC107');
        return redirect('/data-kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         return view('kelas.edit', [
            'kelas' => Kelas::where('id', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([                                           
            'jurusan' => 'required',
            'fakultas' => 'required',
            'nama_kelas' => 'required',
            'tingkat' => 'required',          
        ]);

        $kelas = Kelas::find($id);
        $kelas->jurusan = $request->jurusan;
        $kelas->fakultas = $request->fakultas;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->tingkat = $request->tingkat;
        $kelas->update();

        Alert::success('Berhasil!', 'Data berhasil ditambahkan')->showConfirmButton('Ok', '#FFC107');
        return redirect('/data-kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        //
    }
}
