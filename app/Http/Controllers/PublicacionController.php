<?php

namespace App\Http\Controllers;

use App\Publicacion;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $publicaciones = Publicacion::inactivo()->orderBy('id', 'ASC')->paginate(10);
            return [
                'paginas' =>[
                    'total'=> $publicaciones->total(),
                    'pagina_actual' => $publicaciones->currentPage(),
                    'por_pagina' => $publicaciones->perPage(),
                    'ultima_pagina' => $publicaciones->lastPage(),
                    'desde' => $publicaciones->firstItem(),
                    'hasta' => $publicaciones->lastPage(),
                ],
                'publicaciones'=>$publicaciones
            ];
        }else return redirect('/');
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
        $publicacion = new Publicacion;
        $publicacion->usuario = Auth()->user()->name;
        $publicacion->publicacion = $request->pensamiento;
        $publicacion->save();
        $data = [
            'mensaje'=>'Gracias por compartir con nosotros tus pensamientos y consejos',
        ];

        return response()->json($data, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if($request->ajax()){
            $publicaciones = Publicacion::activo()->orderBy('id', 'DESC')->paginate(1);
            return [
                'paginas' =>[
                    'total'=> $publicaciones->total(),
                    'pagina_actual' => $publicaciones->currentPage(),
                    'por_pagina' => $publicaciones->perPage(),
                    'ultima_pagina' => $publicaciones->lastPage(),
                    'desde' => $publicaciones->firstItem(),
                    'hasta' => $publicaciones->lastPage(),
                ],
                'pensamientos'=>$publicaciones
            ];
        }else return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicacion $publicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $publicacion = Publicacion::findOrFail($request->id);
        $publicacion->estado = 'activo';
        $publicacion->save();
        $data = [
            'mensaje'=>'Aprovaste la publicacion de '.$request->usuario,
        ];
        return response()->json($data,200);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $publicacion = Publicacion::findOrFail($id);
        $publicacion->delete();
        $data=[
            'mensaje'=> 'Se elimino la publicacion correctamente'
        ];
        return response()->json($data, 200);
    }
}
