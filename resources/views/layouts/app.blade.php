<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="../../font-awesome/fontawesome-free-5.12.1-web/js/all.js"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    {{-- <script>

        let input = document.querySelector('#input');
        
        input.addEventListener('change', function(){
            console.log(this.value);
            let fe_display = document.querySelector('.frontend');
            let be_display = document.querySelector('.backend');
            let both_display = document.querySelector('.both');

            if (this.value == 'frontend') {
                fe_display.style.display = 'block';
                be_display.style.display = 'none';
                both_display.style.display = 'none';
            } else if(this.value == 'backend'){
                fe_display.style.display = 'none';
                be_display.style.display = 'block';
                both_display.style.display = 'none'
            } else if(this.value == 'both'){
                both_display.style.display = 'block'
                fe_display.style.display = 'none';
                be_display.style.display = 'none';
            } else {
                both_display.style.display = 'none'
                fe_display.style.display = 'none';
                be_display.style.display = 'none';
            }
        });
   
    </script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="../../font-awesome/fontawesome-free-5.12.1-web/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../font-awesome/fontawesome-free-5.12.1-web/webfonts">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Findworka Academy
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- @extends('include.navbar') --}}

        {{-- <nav class="navbar navbar-expand-lg fixed-top nav-menu">
            <a href="#" class="navbar-brand text-uppercase text-light">
                <span class="h2 font-weight-bold">findworka</span><span class="h1"> academy</span>
            </a>
            <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#myNavbar">
                <div class="bg-light line1"></div>
                <div class="bg-light line2"></div>
                <div class="bg-light line3"></div>
            </button>
            <div class="collapse navbar-collapse text-uppercase justify-content-end font-weight-bold" id="myNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item nav-active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link m-2 menu-item">about</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link m-2 menu-item">login</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link m-2 menu-item">register</a>
                    </li>
                </ul>
            </div>
        </nav> --}}
{{-- 
        @yield('header') --}}

        <main class="">
            @yield('content')
        </main>

        <footer class="px-5">
            <div class="container-fluid">
                <div class="row py-4 text-white">
                    <div class="col-lg-4 col-sm-6">
                        <h5 class="pb-3">About Us</h5>
                        <h6>Findworka is the future of digital work.</h6>
                        <p class="small">
                            We host the largest network of verified developers and lead the 
                            digital transformation of enterprises around the world by 
                            equipping software talents, startups and enterprises with the 
                            project management and productivity tools that they need to build 
                            mission-critical solutions.</p>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <h5 class="pb-3">Contact</h5>
                        <ul class="list-unstyled">
                            <li>
                                (+234) 817 161 1434
                            </li>
                            <li class=" mt-2">
                                <a href="" class="footer-link">info@findworka.com</a>
                            </li>
                            <li class=" mt-2">
                                2 Connal road, Yaba, Lagos. Nigeria.
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <h5 class="pb-3">Community</h5>
                        <ul class="list-inline pt-3">
                            <li class="list-inline-item">
                                <i class="fas fa-camera"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fab fa-google-plus text-danger fa-3x"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fab fa-twitter text-info fa-3x"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fab fa-instagram text-info fa-3x"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fab fa-youtube text-danger fa-3x"></i>
                            </li>
                        <ul>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <h5 class="pb-3">Stay Connected</h5>
                        <p class="small">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Laborum ipsa ad quas, impedit nobis doloremque dolores assumenda provident odio deleniti.</p>
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-danger text-uppercase font-weight-bold">sign up!</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col text-center text-light border-top pt-3">
                        <p><span class="display-4">findworka</span> &copy; 2019. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    {{-- <script>

        let input = document.querySelector('#input');
        
        input.addEventListener('change', function(){
            console.log(this.value);
            let fe_display = document.querySelector('.frontend');
            let be_display = document.querySelector('.backend');
            let both_display = document.querySelector('.both');

            if (this.value == 'frontend') {
                fe_display.style.display = 'block';
                be_display.style.display = 'none';
                both_display.style.display = 'none';
            } else if(this.value == 'backend'){
                fe_display.style.display = 'none';
                be_display.style.display = 'block';
                both_display.style.display = 'none'
            } else if(this.value == 'both'){
                both_display.style.display = 'block'
                fe_display.style.display = 'none';
                be_display.style.display = 'none';
            } else {
                both_display.style.display = 'none'
                fe_display.style.display = 'none';
                be_display.style.display = 'none';
            }
        });
   
    </script> --}}
</body>
</html>
