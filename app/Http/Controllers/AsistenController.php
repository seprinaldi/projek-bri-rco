<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Asisten;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\AsistenController;

class AsistenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('asisten.index', [
            'asisten' => Asisten::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('asisten.create', [
            'asisten' => Asisten::all()
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
            'id_asisten' => 'required',
            'nama' => 'required',
            'join_date' => 'required',
            'role' => 'required',
            'foto' => 'required|mimes:jpeg,png,jpeg|max:500',
            'email' => 'required',
            'password' => 'required',
                         
        ]);

        $namaAsli = $request->file('foto')->getClientOriginalName();

        Asisten::create([
            'id_asisten' => $request->id_asisten,
            'role' => $request->role,
            'nama' => $request->nama,
            'foto' => str_replace('public/', '', $request->file('foto')->storeAs('public/', $namaAsli)),
            'join_date' => $request->join_date,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Alert::success('Berhasil!', 'Berhasil disimpan')->showConfirmButton('Ok', '#FFC107');

        return redirect('/data-asisten');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function show(Asisten $asisten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('asisten.edit', [
            'asisten' => Asisten::where('id', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([                                           
            'id_asisten' => 'required',
            'nama' => 'required',
            'join_date' => 'required',
            'role' => 'required',
            'foto' => 'nullable|mimes:jpeg,png,jpeg|max:500',
            'email' => 'required',
                         
        ]);

        $asisten = Asisten::find($id);
        $asisten->id_asisten = $request->id_asisten;
        $asisten->role = $request->role;
        $asisten->nama = $request->nama;
        $asisten->join_date = $request->join_date;
        $asisten->email = $request->email;
        
        if($request->foto != null) {
            $asisten->foto = str_replace('public/', '', $request->file('foto')->store('public/'));
        }
        $asisten->update();

        Alert::success('Berhasil!', 'Data berhasil ditambahkan')->showConfirmButton('Ok', '#FFC107');
        return redirect('/data-asisten');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asisten $asisten)
    {
        Asisten::destroy($asisten->id);

        Alert::success('Berhasil!', 'Data berhasil ditambahkan')->showConfirmButton('Ok', '#FFC107');
        return redirect('/data-asisten');
    }
}
