<?php

namespace App\Http\Controllers;

use App\Models\Kode;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class KodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kode.index',[
            'kode' => Kode::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */     
    public function store(Request $request)
    {
        $kode = new Kode;
        $kode->id_user = Auth::id();
        $kode->code = Str::random(10);
        $kode->save();

        if(!$kode){
            Alert::error('Gagal!', 'Gagal membuat kode baru')->showConfirmButton('Ok', '#dc3545');
        }

        $generatedCode = Kode::select('code')->where('id_user', Auth::user()->id)->latest('created_at')->first();

        Alert::success('Sukses!', 'Kode berhasil dibuat')
            ->html("<pre>{$generatedCode->code}</pre>")
            ->showConfirmButton('Salin Kode', '#FFC107');
        
        // Alert::success('Kode disalin di clipboard!')->showConfirmButton('Ok', '#FFC107');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kode  $kode
     * @return \Illuminate\Http\Response
     */
    public function show(Kode $kode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kode  $kode
     * @return \Illuminate\Http\Response
     */
    public function edit(Kode $kode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kode  $kode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kode $kode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kode  $kode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kode $kode)
    {
        //
    }
}
