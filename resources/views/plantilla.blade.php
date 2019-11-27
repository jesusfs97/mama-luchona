<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/freelancer.css">
  <title>Mamas luchonas</title>
</head>

<body id="page-top">
   <div id="app">
     <nav-bar />
    </div>

     @yield('Contenido')
     
     @include('Partials/Footer')
     
    
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body> 
</html>