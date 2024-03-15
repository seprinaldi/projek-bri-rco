<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kode;
use App\Models\Absen;
use App\Models\Asisten;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('absen.index', [
            'absen' => Absen::where('berakhir','<>', null)->get(),
        ]);
    }
    
    public function riwayat()
    {
        return view('absen.riwayat-absen', [
            'absen' => Absen::where('id_asisten', Auth::user()->id)->where('berakhir','<>', null)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kode = Kode::where('code', $request->id_code)->first();
        $asisten = Asisten::where('id_asisten', $request->id_asisten)->first();

        if($kode == null){
            Alert::error('Gagal!', 'Kode tidak tersedia')->showConfirmButton('Ok', '#dc3545');
            return back();
        }
        if($kode !== null){
        if($kode->id_user != Auth::id()){
        $absen = new Absen();
        $absen->id_kelas = $request->id_kelas;
        $absen->id_materi = $request->id_materi;
        $absen->id_asisten = $asisten->id;
        $absen->id_code = $kode->id;
        $absen->teaching_role = $request->teaching_role;
        $absen->date = Carbon::now();
        $absen->mulai = Carbon::now();
        $absen->save();

        $kode->id_user_get = Auth::id();
        $kode->update();
        Alert::success('Berhasil!', 'Absensi Berhasil')->showConfirmButton('Ok', '#FFC107');
        return back();
        }else{
            Alert::error('Gagal!', 'Tidak bisa menggunakan kode sendiri')->showConfirmButton('Ok', '#dc3545');
        return back();
        }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(Absen $absen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absen $absen)
    {
       $cek_absen = Absen::where('id_asisten', Auth::user()->id)->where('date', Carbon::now()->toDateString())->where('berakhir', null)->latest('created_at')->first();
        
        $masuk = $cek_absen->mulai;
        $cek_absen->berakhir = Carbon::now()->toTimeString();
        $hasil = Carbon::now()->diffInMinutes($masuk);
        $cek_absen->durasi = $hasil;
        $cek_absen->update();

        Alert::success('Berhasil!', 'Berhasil Checkout')->showConfirmButton('Ok', '#FFC107');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absen $absen)
    {
        //
    }
}
