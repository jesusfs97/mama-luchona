@extends('layouts.app')

@section('Contenido')

<inicio-component></inicio-component>

<!-- Portfolio Section -->

    {{-- @if( $CDF[4]['colorDeFondo'] === "null")
<section class="page-section portfolio img-fluid imagen" style="background-image:url({{Storage::url( $CDF[4]['imagenDeFondo'])}})" id="Tienda">
    @else
    @endif --}}

    <div class="container bg-white">
        <section class="page-section portfolio" id="Artículos">
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
            <div class="row container align-content-center" >
                <div class="card-group">

                    @forelse ($Articulos as $Articulo)
                        <div class="card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 card-md mx-2">
                            <img class="card-img-top img-sm" src="{{$Articulo->UrlImagen}}" alt="Card image cap">

                        <div class="card-body">
                            <h6 class="card-title">{{$Articulo->Titulo}}</h6>
                            <p class="card-text">{{Str::words($Articulo->Meta_Descripcion,10)}}</p>
                        </div>

                        <div class="card-footer">
                            <a href="{{ route('articulos.ver',$Articulo) }}" class="card-link">Leer mas</a>
                        </div>
                        @if (auth()->check())
                            
                            @if(auth()->user()->rol === 'Admin')
                            <div class="card-footer">
                                <a href="{{ route('articulo.editar',$Articulo) }}" class="card-link">Editar</a>
                                {{-- Route::post('/Articulos/Editar/{id}','ArticulosController@show')->name('articulo.editar'); --}}
                            </div>
                            @endif
                        @endif

                        <div class="card-footer">
                            <small class="text-muted">Publicado: {{$Articulo->created_at->diffForHumans()}} </small>
                        </div>
                    </div>
                @empty
        
                @endforelse
            </div> 
        </div>
    </section>
</div>
<div class="container bg-white">
    <section class="page-section" id="pensamientos">
        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Pensamientos y consejos</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>

            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>

            <div class="divider-custom-line"></div>
        </div>

        <crear-publicacion-component :auth="{{json_encode($usuario)}}"></crear-publicacion-component>



    </section>
</div>

@endsection