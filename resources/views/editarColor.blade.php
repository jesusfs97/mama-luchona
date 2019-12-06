@extends('layouts.app')

@section('Contenido')
<div class="masthead text-center container">
        <div>
                <h1 class="display-4 text-center">Editar de {{$Color->Lugar}} </h1>  
        </div>

        <form class=" form-group row" 
                action="{{ route('actualizarColor',$Color->id)}}"
                method="POST"
                enctype="multipart/form-data">
        
        @method('PUT')
        @csrf
        <div class="col-sm-4 my-3 col-form-label">
                <label for="Color">Color de Fondo:</label>
        </div>
        <div class="col-sm-8 my-3" >
                <input class="form-control"  type="color"  value="{{$Color->colorDeFondo}}" name="Color" id="Color">
        </div>

        <div class="col-sm-4 my-3 col-form-label">
        <img width="100px" src="{{Storage::url($Color->imagenDeFondo)}}" alt="">
                <label for="Imagendefondo">Imagen de Fondo:</label>
        </div>
        <div class="col-sm-8 my-3">
                <input class="form-control-file" type="file" name="Imagendefondo" />
        </div>
        
        <button class="btn btn-warning btn-block" type="submit">Guardar Cambios</button>

        </form>
        
</div>

    
@endsection