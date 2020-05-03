@extends('layouts.other')

@section('content')
<div class="d-flex" id="wrapper">
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    @include('student.include.sidemenu')
    
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

        <div class="row justify-content-center mt-5">
            <div class="col-md-9">    
                <div class="container">
                    <h3 class="text-center font-weight-bold">{{$assignment->title}}</h3>
                    <p class="text-center font-weight-bold lead">{{$assignment->content}}</p>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection


