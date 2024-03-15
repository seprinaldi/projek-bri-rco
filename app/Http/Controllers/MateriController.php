<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Materi $id)
    {
       return view('materi.index', [
            'materi' => Materi::orderBy('created_at', 'asc')->get(),
            'mtr' => Materi::where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('materi.create', [
            'materi' => Materi::all()
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
            'materi' => 'required',
        ]);

        Materi::create([
            'materi' => $request->materi,
        ]);

        Alert::success('Berhasil!', 'Materi berhasil dibuat')->showConfirmButton('Ok', '#FFC107');
        return redirect('/data-materi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('materi.edit', [
            'materi' => Materi::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([                                           
            'materi' => 'required',
        ]);

        $materi = Materi::find($id);
        $materi->materi = $request->materi;
        $materi->update();

        Alert::success('Berhasil!', 'Data berhasil diubah')->showConfirmButton('Ok', '#FFC107');
        return redirect('/data-materi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        //
    }
}
