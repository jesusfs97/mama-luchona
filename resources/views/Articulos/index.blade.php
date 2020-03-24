<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$Articulo->Meta_Descripcion}}" />
    <meta name="keywords" content="{{$Articulo->Meta_Keywords}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Mamas luchonas') }}</title>
    <script src="https://kit.fontawesome.com/76f8203e92.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/freelancer.css') }}">
    
</head>

<body>
    <div class="container app" id="app">
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
                <p class="lead"></p>
                {!! $Articulo->Contenido1 !!}
                
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
                <div class="card my-4">
                    <h5 class="card-header">Leave a Comment:</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                    <!-- Single Comment -->
                    <div class="media mb-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Commenter Name</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                    <!-- Comment with nested comments -->
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
                    </div>
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
        <barra />
        @include('Partials.Footer')
    </div>
    <!-- /.container -->
    <!--JavaScript -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
