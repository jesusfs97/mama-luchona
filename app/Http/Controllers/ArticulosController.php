<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
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

    public function show(Articulo $Articulo)
    {
        return view('Articulos.index',compact('Articulo'));
    }
    public function crear()
    {
        return view('Articulos.Crear');
    }
    public function guardar(Request $request)
    {   $url=Str::kebab(request('metadescription'));
        // return $request;   
        Articulo::create([
           'Meta_Descripcion' => request('metadescription'),
           'Meta_Keywords' => request('metakeywords'),
           'Titulo' => request('titulo'),
           'URL'=> $url,
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
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombre = $imagen->getClientOriginalName();
            $url = '/img/principales/';
            $path = public_path($url);
            $imagen->move($path , $nombre);
            return $url.$nombre;
        }
        return 'no llego';
    }
    public function editar(Articulo $Articulo){
        
        return view('Articulos.Editar', compact('Articulo'));
    }
    public function update(Request $request, Articulo $Articulo){
        $url=Str::kebab(request('metadescription'));
        $Articulo->Meta_Descripcion = $request->metadescription;
        $Articulo->Meta_Keywords = $request->metakeywords;
        $Articulo->Titulo = $request->titulo;
        $Articulo->URL= $url;
        $Articulo->UrlImagen = $request->imagen;
        $Articulo->Contenido1 = $request->editor1;
        $Articulo->save();

        return redirect('/');
    }
}
