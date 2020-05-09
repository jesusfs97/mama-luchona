<?php

namespace App\Http\Controllers;

use App\frase;
use Illuminate\Http\Request;

class FraseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax() ){
            $frases = frase::get();
            $ultima_frase = $frases->last();
            return $ultima_frase;
        }
        return redirect('/');
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
        if($request->ajax()){
            $nuevaFrase = New frase;
            $nuevaFrase->frase = $request->nuevaFrase;
            $nuevaFrase->save();
            return $nuevaFrase;
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\frase  $frase
     * @return \Illuminate\Http\Response
     */
    public function show(frase $frase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\frase  $frase
     * @return \Illuminate\Http\Response
     */
    public function edit(frase $frase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\frase  $frase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, frase $frase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\frase  $frase
     * @return \Illuminate\Http\Response
     */
    public function destroy(frase $frase)
    {
        //
    }
}
