<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Articulo; 

class ArticulosController extends Controller
{   
    function __construct()
    {
        $this->middleware('auth',['except' =>['index']]);
        $this->middleware('rol',['except' =>['index','show']]);
    }
    public function index()
    {
        $Articulos = Articulo::All();
        if(Auth()->check()){
            $usuario = true;
        }else{
            $usuario = false;
        }
        return view('home', compact('Articulos' , 'usuario'));
    }

    public function show($id)
    {
        $Articulo = Articulo::FindOrFail($id);
        return view('Articulos.index',compact('Articulo'));
    }
    public function crear()
    {
        return view('Articulos.Crear');
    }
    public function guardar(Request $request)
    {   
        // return $request;   
        Articulo::create([
           'Meta_Descripcion' => request('metadescription'),
           'Meta_Keywords' => request('metakeywords'),
           'Titulo' => request('titulo'),
           'UrlImagen' => request('imagen'),
           'Contenido1' => request('editor1'),
        ]);

        return redirect('/#Tienda');
    }
    public function imagen(Request $request)
    {
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombre = $imagen->getClientOriginalName();
            $url = '/img/blog/';
            $path = public_path($url);
            $imagen->move($path , $nombre);
            return $url.$nombre;
        }
        return 'no llego';   
    }
    public function imagenPrincipal(Request $request)
    {
        if($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
            $nombre = $imagen->getClientOriginalName();
            $url = '/img/principales/';
            $path = public_path($url);
            $imagen->move($path , $nombre);
            return $url.$nombre;
        }
        return 'false' ;
    }
}
