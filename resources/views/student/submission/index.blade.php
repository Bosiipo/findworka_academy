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
                <div class="row justify-content-center">
                    <div class="col-md-8 m-5">                
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                  <th scope="col" class="text-center">Assignment Title</th>
                                  <th scope="col" class="text-center">Course</th>
                                  <th scope="col" class="text-center">File</th>
                                  <th scope="col" class="text-center">Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user->submissions as $submission)
                                    <tr>
                                        <td class="p-4">{{$submission->title}}</td>
                                        <td class="p-4">{{$submission->course_name}}</td>
                                        <td class="p-4"><a href="{{url ('/tutor/submissions/download')}}/{{$submission->id}}" class="btn btn-danger">Download Submission</a></td>
                                        <td class="p-4">
                                            @if ($submission->grade == null)
                                                <p>Not yet graded!</p>
                                            @elseif($submission->grade != null)
                                                <p class="text-center">{{$submission->grade}}</p>
                                            @endif
                                        </td>                                  
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>   
        </div>
    </div>

@endsection