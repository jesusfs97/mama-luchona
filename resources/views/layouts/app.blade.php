<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Mamas luchonas') }}</title>
    <script src="https://kit.fontawesome.com/76f8203e92.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/freelancer.css') }}">
</head>
<body>
    <div id="app">
        @yield('Contenido')
        @include('Partials.Footer')
        <barra />
    </div>
    <script src="{{ asset('js/app.js'.'?'.Str::Random(3)) }}" defer></script>
    <script src="{{ asset('vendors/ckeditor/ckeditor.js'.'?'.Str::Random(3)) }}"></script>
</body>
</html>
