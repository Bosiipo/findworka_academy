@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- You are logged in! --}}
                {{-- </div>
            </div>
        </div>
    </div>
</div> --}}
<header>
    <div class="text-white text-md-right text-center banner">
        <p class="display-6 lead banner-par pt-5">Welcome to <span class="">findworka</span></p>
        <h1 class="display-5 banner-heading text-bold">Africa's biggest talent and technology platform</h1>
        <p class="lead">Findworka is a fast-growing network of Africa's finest tech talents being 
            effectively matched with the most ambitious companies and 
            projects in an integrated talent and project 
            management ecosystem.</p>
        <div class="justify-content-right pt-4">
            <button class="btn  mr-3 btn-1 text-uppercase">
                <a href="{{url('/central_dashboard')}}" class="text-white text-decoration-none">Get Started</a>
            </button>
            {{-- <button class="btn  mr-3 btn-1 text-uppercase">
                <a href="/findworka-academy/register">Register</a>
            </button>
            <button class="btn btn-outline btn-2 text-uppercase">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </button> --}}
        </div>
    </div>
</header>

<section class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-uppercase">Courses</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 my-5">
                <div class="card border-0 card-shadow">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img src="{{URL::asset('/images/software-dev.jpg')}}" alt="" class="card-img-top embed-responsive-item">
                    </div>  
                    <div class="card-img-overlay">
                        <h5 class="text-light font-weight-bold text-uppercase p-2 heading"><a href="/web-dev">Web development</a></h5>
                    </div>
                    <div class="card-body pt-5">
                        Learn and sharpen your web skills.
                        {{-- <p class="pt-3">Get started</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-5">
                <div class="card border-0 card-shadow">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img src="{{URL::asset('/images/mobile.png')}}" alt="Card image cap" class="card-img-top embed-responsive-item"/>
                    </div>
                    {{-- <img src="{{URL::asset('/images/mobile-dev3.jfif')}}" alt="" class="card-img-top"> --}}
                    <div class="card-img-overlay">
                        <h5 class="text-light font-weight-bold text-uppercase p-2 heading"><a href="/mobile-dev">Mobile development</a></h5>
                    </div>
                    <div class="card-body pt-5">
                        Learn and sharpen your mobile skills.
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-5">
                <div class="card border-0 card-shadow">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img src="{{URL::asset('/images/data-science.png')}}" alt="Card image cap" class="card-img-top embed-responsive-item"/>
                    </div>
                    <div class="card-img-overlay">
                        <h5 class="text-light font-weight-bold text-uppercase p-2 heading"><a href="/data-science">Data-science with python</a></h5>
                    </div>
                    <div class="card-body pt-5">
                        Learn how to use Python and more.
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-5">
                <div class="card border-0 card-shadow">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img src="{{URL::asset('/images/ui-ux.webp')}}" alt="Card image cap" class="card-img-top embed-responsive-item"/>
                    </div>
                    
                    <div class="card-img-overlay">
                        <h5 class="text-light font-weight-bold text-uppercase p-2 heading"><a href="/product-design">Product Design (UI/UX)</a></h5>
                    </div>
                    <div class="card-body pt-5">
                        Learn how to design beautiful apps and web pages.
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="what-we-do">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1 class="">This is what we do</h1>
                <p class="lead">Findworka builds amazing software products, whether it is just an MVP or the nth version of your platform.
                    We also supply development talents for your contract and full-time position.</p>
            </div>
            
            
        </div>
    </div>
   
    
</section>


@endsection
