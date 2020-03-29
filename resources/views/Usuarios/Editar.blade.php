@extends('layouts.app')


@section('Contenido')

<div class="masthead text-center container">
    <div>
        <h1 class="display-4 text-center">Editar Usuario</h1>
    </div>
    
    <form method="POST" action="{{route('Actualizar',$user->id)}}">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" name="nombre" id="nombre" value="{{$user->name}}">
              {!! $errors->first('nombre','<span class="error">:message</span>')!!}
            </div>
            <div class="form-group col-md-6">
              <label for="correo">Correo:</label>
              <input type="email" class="form-control" name="correo" id="correo" value="{{$user->email}}">
              {!! $errors->first('correo','<span class="error">:message</span>')!!}
            </div>
          </div>
        <button type="submit">Guardar</button>
    </form>

    </div>
</div>
    
@endsection