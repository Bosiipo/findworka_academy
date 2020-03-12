@extends('layouts.app')

@section('content')

<section class="m-3">
    {{-- <div class="container m-2"> --}}
        <div class="row">
            <div class="col-lg-3 col-sm-4">
                <div class="card">
                    <div class="card-header font-weight-bold bg-dark text-white">Dashboard</div>
                    <div class="card-body">
                        @include('student.include.sidemenu')      
                    </div>
                </div>
            </div>
       
            <div class="col-lg-9 col-sm-8">
                <h1 class="d-flex justify-content-end">Welcome, {{Auth::user()->name}}</h1> 
                <section class="container mt-5">
                    <div class="row justify-content-start">
                        <h3 class="font-weight-bold">Select course to register:</h3>
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
                </section>  
            </div>
                
            
            
        </div>

    {{-- </div> --}}
    
    
</section>




@endsection