@extends('layouts.app')


@section('Contenido')
<div class=" container align-content-center">
    <div class="masthead pb-3">
        <admin-frase-component></admin-frase-component>
        <div class="container row">
            <h5 class="display-6 col-3 px-0 mx-0"> Editar barra de navegacion </h5>
            <Menus></Menus>
        </div>
    </div>
</div>
<div class="py-5 container align-content-center">
    <div class="row text-center">
        <admin-comentarios-component></admin-comentarios-component>
    </div>
</div>
    



{{-- <div class=" container">
        <div class="row masthead text-center">
            <h1 class="display-4">Colores de fondo</h1>
            @if(session('mensaje'))
    
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
    
            @endif
            <table class="table">
                
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Espacio</th>
                        <th scope="col">Color</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
    
                <tbody>

                    @foreach ($fondo as $Color)   
                    <tr>
                        <th scope="row">{{$Color->id}}</th>
                        <td>{{ $Color->Lugar}}</td>
                        <td>{{ $Color->colorDeFondo}}</td>

                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('Colores.Editar', $Color) }}">Cambiar color</a>
                        </td>
    
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}
@endsection