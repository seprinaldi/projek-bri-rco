<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kode;
use App\Models\User;
use App\Models\Absen;
use App\Models\Kelas;
use App\Models\Materi;
use App\Models\Asisten;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Kode $id)
    {  

        if(Auth::user() != null){
        return view('index', [
            'user' => User::where('email', Auth::user()->email)->first(),
            'kode' => Kode::select('code')->where('id_user', Auth::user()->id)->latest('created_at')->first(),
            'kelas' => Kelas::all(),
            'materi' => Materi::all(),
            'cek_asisten' => Absen::where('id_asisten', Auth::user()->id)->where('berakhir', null)->latest('created_at')->first(),
        ]);
        }else{
             return view('index');
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
