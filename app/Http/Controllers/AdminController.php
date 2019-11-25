<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $menus = App\Menu::all();
        $fondo = App\color::all();
        return view('Administrar',Compact('menus','fondo')
            );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {   $Titulo = App\Menu::findOrFail($id);
        return view('editarMenu', compact('Titulo'));
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
        $menuAcualizado = App\Menu::findOrFail($id);
        $menuAcualizado->Titulo = $request->nombre;
        $menuAcualizado->colorFondo = $request->colorFondo;
        $menuAcualizado->colorTexto = $request->colorTexto;

        $menuAcualizado->save();

        return redirect()->route('Administrar');

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
