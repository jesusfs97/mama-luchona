<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$Articulo->Meta_Descripcion}}" />
    <meta name="keywords" content="{{$Articulo->Meta_Keywords}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$Articulo->Titulo}}</title>
    <script src="https://kit.fontawesome.com/76f8203e92.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/freelancer.css') }}">
</head>

<body>
    @include('Partials.Nav-Bar')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Titulo -->
                <h1 class="mt-4">{{$Articulo->Titulo}}</h1>
                
                <!-- Autor -->
                <p class="lead">
                    {{$Articulo->Descripcion}}
                </p>
                <hr>
                <!--Fecha -->
                <p>Publicado {{$Articulo->created_at->diffForHumans()}}</p>
                <hr>
                <!--Imagen -->
                
                <hr>
                <!-- Post Content -->
                <div class="row">
                    <p class="lead">
                        {!! $Articulo->Contenido1 !!}
    
                    </p>

                </div>
                
                <div class="container">
                    <div class="media-container-row">
                        <div class="col-12 col-md-8">
                            <div class="media-container-row">
                                <div class="media-content">

                                </div>
                                <div class="mbr-figure">
 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comments Form -->
                @if(auth()->check())

                <div class="card my-4" >
                    <h5 class="card-header">¿Qué te parecio esto {{auth()->user()->name}}?</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('CrearComentario', $Articulo->id)}}">
                            <div class="form-group" >
                                <textarea name="comentario" class="form-control" rows="3"></textarea>
                                <input name="usuario" type="hidden" value="{{auth()->user()->name}}">
                                <input name="articulo" type="hidden" value="{{$Articulo->id}}">
                                @csrf
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                @else
                    <div class="card my-4">
                        <h5 class="card-header">Porfavor inicia sesion</h5>
                    </div>
                @endif
                    <!-- Single Comment -->

                @forelse ($Articulo->comentarios as $comentario)
                    <div class="media mb-4" id="comentarios">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">{{$comentario->username}}</h5>
                            {{ $comentario->contenido }}
                        </div>
                    </div>
                        
                @empty
                    <div class="media mb-4" id="comentarios">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Se la primera en comentar</h5>
                        </div>
                    </div>
                        
                @endforelse
                    {{-- <!-- Comment with nested comments -->
                    <div class="media mb-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Commenter Name</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            <div class="media mt-4">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0">Commenter Name</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>
                            <div class="media mt-4">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0">Commenter Name</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!-- Sidebar Widgets Column -->
                <div class="col-md-4">
                    <!-- Categories Widget -->
                    <div class="card my-4">
                        <h5 class="card-header"></h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                        <li>
                                            <a href="#"></a>
                                        </li>                
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side Widget -->
                    <div class="card my-4">
                        <h5 class="card-header"></h5>
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <!-- Footer -->
        <barra></barra>
        @include('Partials.Footer')
    </div>
    <!-- /.container -->
    <!--JavaScript -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
