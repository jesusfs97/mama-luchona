@extends('layouts.app')
@section('Contenido')
<div class=" masthead container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-body">
                    <form  action="{{ route('ActulizarArticulo',$Articulo)}}" method="POST">
                        @method('PUT')
                        {{-- enctype="multipart/form-data"> --}}
                        @csrf
                        <div class="form-group">
                            <label for="Metadatos">Meta-Descripcion :</label>
                            <input name="metadescription"
                            class="form-control" 
                            id="Metadatos" 
                            type="text"
                            required placeholder="Escribe aqui tu meta-descripcion"
                            value="{{$Articulo->Meta_Descripcion}}">
                        </div>

                        <div class="form-group">
                            <label for="Meta-keywords">Meta-Keywords :</label>
                            <input name="metakeywords"
                            class="form-control" 
                            id="Meta-keywords" 
                            type="text"
                            required placeholder="Escribe aqui tu meta-keyword´s"
                            value="{{$Articulo->Meta_Keywords}}">
                            <small class="form-text text-muted">Recuerda separar cada palabra con una "coma"</small>
                        </div>
                        <Imagen> </Imagen>
                        <div class="form-group">
                            <label for="titulo">Titulo :</label>
                            <input name="titulo"
                            class="form-control" 
                            id="titulo" 
                            type="text"
                            required placeholder="Agrega un titulo"
                            value="{{$Articulo->Titulo}}">
                        </div>

                        <textarea class="ckeditor" name="editor1" id="editor1" rows="10" cols="80" >
                            {{$Articulo->Contenido1}}
                        </textarea>
                        <div class="mx-auto">

                                <button class="btn btn-sm align-content-center btn-outline-success" > Crear</button>

                        </div>
                    </form>
                    <images> </images>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection