<?php

namespace App\Http\Controllers;

use App\Models\mobil;
use App\Models\User;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //tampilin list di home page
        $mobils = mobil::all();
        return view('mobil.index', compact('mobils'));
        //compact = menampilkan object mobils
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all();
        return view('mobil.addMobil',compact('users'));
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
        mobil::create($request->all());
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show(mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(mobil $mobil)
    {
        //
        $users = User::all();
        return view('mobil.editMobil',compact('mobil','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mobil $mobil)
    {
        //
        $mobil->update($request->all());
        return redirect()->route('mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(mobil $mobil)
    {
        //
        $mobil->delete();
        return redirect()->route('mobil.index');
    }
}
