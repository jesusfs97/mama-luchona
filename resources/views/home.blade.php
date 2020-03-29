@extends('layouts.app')

@section('Contenido')


{{-- @if( $CDF[3]['colorDeFondo'] === "null")
<header class="masthead text-white text-center imagen img-fluid" id="home" style="background-image:url({{Storage::url($CDF[3]['imagenDeFondo'])}});">
@else
@endif style="background-color:{{$CDF[3]['colorDeFondo']}};" --}}
    <header class="masthead text-white text-center"style="background-color:#000;" id="Inicio">

    <div class="container d-flex align-items-center flex-column">
        
        <!-- Masthead Avatar Image -->
        {{-- <img class="img-fluid masthead-avatar mb-5" src="img/avataaars.svg" alt=""> --}}
        
        <!-- Masthead Heading -->
        @if(session()->has('exito'))
        <div class="alert alert-success" role="alert">
            {{session('exito')}}
        </div>
        @endif
        <h1 class="masthead-heading text-uppercase mb-0">Mamá luchona</h1>
        
        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Masthead Subheading -->
        <p class="masthead-subheading font-weight-light mb-0">«Una madre siempre piensa dos veces, una por ella y otra por su hijo.»</p>

    </div>
</header>

<!-- Portfolio Section -->

    {{-- @if( $CDF[4]['colorDeFondo'] === "null")
<section class="page-section portfolio img-fluid imagen" style="background-image:url({{Storage::url( $CDF[4]['imagenDeFondo'])}})" id="Tienda">
    @else
    @endif --}}

    <section class="page-section portfolio" id="Artículos">
    <div class="container">
        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Articulos</h2>


        <!-- Icon Divider -->
        
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            
            <div class="divider-custom-icon">
                <a class="oculto" href="{{ route('articulos.crear') }}"><i class="fas fa-star"></i></a>
            </div>
            
            <div class="divider-custom-line"></div>
        </div>
        
        <!-- Portfolio Grid Items -->
        <div class="row col-sm-12" >
            <div class="card-group">
                
                @forelse ($Articulos as $Articulo)
                    <div class="card card-md mx-2">
                        <img class="card-img-top img-sm" src="{{$Articulo->UrlImagen}}" alt="Card image cap">
                        
                        <div class="card-body">
                            <h6 class="card-title">{{$Articulo->Titulo}}</h6>
                            <p class="card-text">{{Str::words($Articulo->Meta_Descripcion,10)}}</p>
                        </div>

                        <div class="card-footer">
                            <a href="{{ route('articulos.ver',$Articulo) }}" class="card-link">Leer mas</a>
                        </div>

                        <div class="card-footer">
                            <small class="text-muted">Publicado: {{$Articulo->created_at->diffForHumans()}} </small>
                        </div>
                    </div>
                @empty
        
                @endforelse
            </div> 
        </div>
    </div>
                


            {{-- <div class="col-sm-4">
                <div class="card card-md">
                    <img class="card-img-top img-md" src="{{$Articulo->UrlImagen}}" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title">{{$Articulo->Titulo}}</h6>
                        <p class="card-text">{{Str::words($Articulo->Meta_Descripcion,12)}}</p>
                    <a href="{{ route('articulos.ver',$Articulo) }}" class="card-link btn btn-primary">Leer mas</a>
                    <div class="card-footer">
                        <small class="text-muted">Publicado: {{$Articulo->created_at->diffForHumans()}} </small>
                    </div>
                    
                    {{-- \Carbon\Carbon::parse($solucion->pivot->caducidad)->diffForHumans() 
                    </div>
                </div>--}}

</section>
@endsection