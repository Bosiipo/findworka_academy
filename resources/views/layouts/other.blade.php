<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Findworka Academy</title>


    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <script defer src="../../font-awesome/fontawesome-free-5.12.1-web/js/all.js"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/app.js') }}"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="../../font-awesome/fontawesome-free-5.12.1-web/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../font-awesome/fontawesome-free-5.12.1-web/webfonts">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    {{-- @include('layouts.navbar') --}}


    @yield('content')

</body>
</html>
