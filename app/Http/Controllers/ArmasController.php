<?php

namespace App\Http\Controllers;

use App\Models\Armas;
use Illuminate\Http\Request;

class ArmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $armas = Armas::get();
        return view('administracion/armamentos', compact('armas'));
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
     * @param  \App\Models\Armas  $armas
     * @return \Illuminate\Http\Response
     */
    public function show(Armas $armas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Armas  $armas
     * @return \Illuminate\Http\Response
     */
    public function armas()
    {
        $armas = Armas::get();
        return $armas;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Armas  $armas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Armas $armas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Armas  $armas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Armas $armas)
    {
        //
    }
}
