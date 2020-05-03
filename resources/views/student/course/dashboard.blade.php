@extends('layouts.other')

@section('content')
<div class="d-flex" id="wrapper">
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    @include('student.include.sidemenu')

    <!-- Page Content -->
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
            <div class="row justify-content-start">
                <div class="col-md-12 student-course p-5">
                    <h1 class="d-flex justify-content-start text-white">Welcome, {{Auth::user()->name}}</h1> 
                    {{-- <h2 class="text-white"></h2> --}}
                <p class="text-white">You're registered for {{Auth::user()->courses()->first()->name}} and it's for a duration of {{Auth::user()->courses()->first()->duration}}months</p>
                    <button class="btn btn-primary"><a href="{{url ('/student/course')}}" class="text-decoration-none text-white font-weight-bold">View Course Details</a></button>
                </div>
                <div class="col-md-12 p-5 background-assignment text-right">
                    <h2>Assignments</h2>
                    <p>You have {{count($assignments)}} assignments!</p>
                    <button class="btn btn-primary"><a href="{{url ('/student/assignments')}}" class="text-decoration-none text-white font-weight-bold">View Assignments</a></button>
                </div>
                {{-- Payments --}}
                <div class="col-md-12 p-5 background-payment">
                    <h2>Payments</h2>
                    <button class="btn btn-primary mt-3"><a href="{{url ('/student/payments')}}" class="text-decoration-none text-white font-weight-bold">View payment history</a></button>                   
                </div>
            </div>
        </div>   
    </div>
</div>
    <!-- /#page-content-wrapper -->
  <!-- /#wrapper -->
@endsection

