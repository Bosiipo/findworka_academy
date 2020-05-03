@extends('layouts.other')

@section('content')
<div class="d-flex" id="wrapper">
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    @include('tutor.include.sidemenu')
    
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-md navbar bg-dark shadow-sm">
            <button class="btn btn-primary" id="menu-toggle">Dashboard</button>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon text-white"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <a class="text-decoration-none text-white font-weight-bold navbar-brand" href="{{ url('/') }}">
                    Findworka Academy
                </a>
              </ul>
            </div>
        </nav>

        <div class="container-fluid course_page">
            <div class="row text-right">
                <div class="col-md-12 background-student p-5">
                    <h2 class="text-white">Students</h2>
                    <p class="text-white">You have {{count($students)}} students enrolled in your course!</p>
                    <button class="btn btn-primary"><a href="{{url ('/tutor/students')}}" class="text-decoration-none text-white font-weight-bold">View Students</a></button>
                </div>
            </div>
                <div class="row" style="background-color: yellow; padding: 50px;">
                    <div class="col-md-6">
                        <h2>Hello, {{Auth::user()->name}}</h2>
                        <p class="lead">Course: {{Auth::user()->courses()->first()->name}}</p>
                        <p class="lead">About: {{Auth::user()->courses()->first()->description}}</p>
                    </div>
                    <div class="col-md-6">
                        <p class="lead">As a tutor of Findworka Academy, you're expected to give 
                            students assignments, grade them as well as perform other menial 
                        tasks required of a tutor. </p>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12 background-assignment p-5">
                    <h2>Assignments</h2>
                    <p>You have given out {{count($assignments)}} assignments!</p>
                    <button class="btn btn-primary"><a href="{{url ('/tutor/assignments')}}" class="text-decoration-none text-white font-weight-bold">View Assignments</a></button>
                </div>
            </div>
            </div>  
        </div>
    </div>
</div>

@endsection