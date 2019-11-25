<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/freelancer.css">
  <script src="{{asset('/js/app.js')}}" type="text/javascript"></script>
  <title>Mamas luchonas</title>
</head>

<body id="page-top">

    @include('Partials/barraDeNavegacion')

    @yield('Contenido')
    
    @include('Partials/Footer')


  
</body> 
</html>