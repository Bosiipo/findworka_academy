@extends('layouts.app')

@section('content')

<header>
    <div class="text-white text-md-right text-center banner">
        <p class="display-6 lead banner-par pt-5">Welcome to <span class="">findworka</span></p>
        <h1 class="display-5 banner-heading text-bold">Africa's biggest talent and technology platform</h1>
        <p class="lead">Findworka is a fast-growing network of Africa's finest tech talents being 
            effectively matched with the most ambitious companies and 
            projects in an integrated talent and project 
            management ecosystem.</p>
        <div class="justify-content-right pt-4">
            <a class="get-started-button btn mr-3 text-uppercase text-decoration-none" href="{{url('/central_dashboard')}}">Get Started</a>
            <a class="register-button btn mr-3 text-uppercase" href="{{url('/register')}}">Register</a>
        </div>
    </div>
</header>


<section class="mission p-5">
    <div class="container-fluid">
        <!-- title -->
        <div class="row text-center text-white">
            <div class="col m-4">
                <h1 class="display-4 mb-4">Why Join Findworka?</h1>
                <div class="underline mb-4"></div>
                <div class="d-flex">
                    <ul class="list-inline mx-auto justify-content-center">
                        <li class="list-inline-item">Don't have any knowlegde about coding?</li>
                        <li class="list-inline-item">Want to improve your skills?</li>
                        <li class="list-inline-item">Want to go from beginner to job-ready?</li>
                    </ul>
                </div>
                <p class="lead">
                    You've just drifted into safe waters!
                </p>
            </div>
        </div>
        <!-- end of title -->
        <div class="row my-5">
            <div class="col-md-3 text-center">
                <i class="fas fa-laptop-code fa-5x text-danger"></i>
                <h1 class="text-white mb-3">Online Classes</h1>
                <p class="text-muted">You can learn anywhere - either at our 
                    Lagos training centers or from your couch.
                    This means that you can re-learn difficult concepts by watching our materials.</p>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-chalkboard-teacher fa-5x text-danger"></i>
                <h1 class="text-white mb-3">Experienced tutors</h1>
                <p class="text-muted">We have world-class facilitators to put learners through the principle of software development</p>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-money-bill-wave text-danger fa-5x"></i>
                <h1 class="text-white mb-3">Installmental Payments</h1>
                <p class="text-muted">Here at Findworka, we give you the graace and privilege to pay twice..</p>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-briefcase text-danger fa-5x"></i>
                <h1 class="text-white mb-3">Internship opportunity</h1>
                <p class="text-muted">After successful completion of a course, students who perform good enough will be given the opportunity to intern at some of our partnering firms.</p>
            </div>
        </div>
    </div>
</section>

<section class="p-5">
    <div class="container-fluid">
        <div class="row text-center text-dark">
            <div class="col m-4">
                <h1 class="display-4 mb-4">Courses</h1>
                <p class="lead">Our curriculum is designed to help you have a strong technical background, 
                    develop the ability to learn quickly and apply what you know on either your startup, 
                    your freelance projects or for your new employers.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 my-5">
                <div class="card border-0 card-shadow">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img src="{{asset('/images/software-dev.jpg')}}" alt="" class="card-img-top embed-responsive-item">
                    </div>  
                    <div class="card-img-overlay">
                        <h5 class="text-light font-weight-bold text-uppercase p-2 heading">Web development</h5>
                    </div>
                    <div class="card-body pt-5">
                        Learn and sharpen your web skills.
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-5">
                <div class="card border-0 card-shadow">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img src="{{asset('/images/mobile.png')}}" alt="Card image cap" class="card-img-top embed-responsive-item"/>
                    </div>
                    {{-- <img src="{{asset('/images/mobile-dev3.jfif')}}" alt="" class="card-img-top"> --}}
                    <div class="card-img-overlay">
                        <h5 class="text-light font-weight-bold text-uppercase p-2 heading">Mobile development</h5>
                    </div>
                    <div class="card-body pt-5">
                        Learn and sharpen your mobile skills.
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-5">
                <div class="card border-0 card-shadow">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img src="{{asset('/images/data-science.png')}}" alt="Card image cap" class="card-img-top embed-responsive-item"/>
                    </div>
                    <div class="card-img-overlay">
                        <h5 class="text-light font-weight-bold text-uppercase p-2 heading">Data-science with python</h5>
                    </div>
                    <div class="card-body pt-5">
                        Learn how to use Python and more.
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-5">
                <div class="card border-0 card-shadow">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img src="{{asset('/images/ui-ux.webp')}}" alt="Card image cap" class="card-img-top embed-responsive-item"/>
                    </div>
                    
                    <div class="card-img-overlay">
                        <h5 class="text-light font-weight-bold text-uppercase p-2 heading">Product Design (UI/UX)</h5>
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
