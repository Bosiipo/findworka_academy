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

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-7" style="margin-top: 90px;">
                        <div class="card">
                            <div class="card-header">Create Assignment</div>
            
                            <div class="card-body">
                                <form method="POST" action="{{ url('/tutor/assignments') }}">
                                    @csrf
            
                                    <div class="form-group row">    
                                        <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
            
                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control @error('name') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row justify-content-center">
                                        <label for="course">Course</label>
                                        <div class="col-md-6">
                                            <select name="course" type="text" class="form-control">
                                                @foreach ($courses as $course)
                                                    <option value="{{$course->name}}">{{$course->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="content" class="col-md-4 col-form-label text-md-right">Content</label>
                                        <div class="col-md-6">
                                            <textarea id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" required autocomplete="course"></textarea>
                                            @error('content')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Create Assignment
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>  
        </div>
    </div>

@endsection
