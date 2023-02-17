<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\User;
use App\Models\Verballinguistik;

class PenduserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert ke table users
        $user = new User;
        $user->role = 'user';
        $user->name = $request->namaAnak;
        $user->password = bcrypt($request->nisn);
        $user->save();
        
        // insert table pendaftaran
        $pend = new Pendaftaran;
        $pend->user_id = $user->id;
        $pend->namaAnak = $request->namaAnak;
        $pend->umur = $request->umur;
        $pend->namaOrtu = $request->namaOrtu;
        $pend->alamat = $request->alamat;
        $pend->nowa = $request->nowa;
        $pend->save();

        // insert table verbal
        $verbal = new Verballinguistik;
        $verbal->pendaftaran_id = $user->id;
        $verbal->Anak_saya_suka_bercerita = $request->Anak_saya_suka_bercerita;
        $verbal->Anak_saya_mudah_mengingat_kata = $request->Anak_saya_mudah_mengingat_kata;
        $verbal->Anak_saya_suka_permainan_kata = $request->Anak_saya_suka_permainan_kata;
        $verbal->Anak_saya_cepat_menemukan_kesalahan_kata = $request->Anak_saya_cepat_menemukan_kesalahan_kata;
        $verbal->Anak_saya_mampu_mengungkapkan_ide = $request->Anak_saya_mampu_mengungkapkan_ide;
        $verbal->Anak_saya_suka_membaca = $request->Anak_saya_suka_membaca;
        $verbal->save();

        return 'Cek DB';
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
    }
}
