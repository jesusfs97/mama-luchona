@extends('layouts.app')

@section('Contenido')


{{-- @if( $CDF[3]['colorDeFondo'] === "null")
<header class="masthead text-white text-center imagen img-fluid" id="home" style="background-image:url({{Storage::url($CDF[3]['imagenDeFondo'])}});">
@else
@endif style="background-color:{{$CDF[3]['colorDeFondo']}};" --}}
    <header class="masthead text-white text-center"style="background-color:#000;" id="home">

    <div class="container d-flex align-items-center flex-column">
        
        <!-- Masthead Avatar Image -->
        {{-- <img class="img-fluid masthead-avatar mb-5" src="img/avataaars.svg" alt=""> --}}
        
        <!-- Masthead Heading -->
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
    <section class="page-section portfolio" id="Tienda">
    <div class="container">
        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Articulos</h2>

        <!-- Icon Divider -->
        
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            
            <div class="divider-custom-line"></div>
        </div>
        
        <!-- Portfolio Grid Items -->
        <div class="row">
            
            @forelse ($Articulos as $Articulo)
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/img/compra-ya-el-regalo-para-mama-en-amazon.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$Articulo->Titulo}}</h5>
                        <p class="card-text">{{$Articulo->Descripcion}}</p>
                    <a href="{{ route('articulos.ver',$Articulo) }}" class="btn btn-primary">Leer mas</a>
                    <small></small>
                    </div>
                </div>
            </div>
            @empty

            @endforelse
        </div>

</section>
@endsection