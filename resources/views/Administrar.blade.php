@extends('layouts.app')


@section('Contenido')
<div class=" container align-content-center">
    <div class="row masthead">
        <h1 class="display-4"> Menus</h1>
    </div>
</div>
<div class="container col-12">
    <Menus> </Menus>
</div>


<div class=" container">
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
                    {{-- {{dd($fondo[0]['colorDeFondo'])}} --}}
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
    </div>
@endsection