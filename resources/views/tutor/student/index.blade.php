@extends('layouts.other')

@section('content')

    <div class="d-flex" id="wrapper">
        @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
        @endif

        @include('tutor.include.sidemenu')

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
                                  <th scope="col" class="text-center">Name</th>
                                  <th scope="col" class="text-center">E-mail</th>
                                  <th scope="col" class="text-center">Role</th>
                                  <th scope="col" class="text-center">Action</th>
                                  <th scope="col" class="text-center">Course</th>
                                  <th scope="col" class="text-center">Submissions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                @foreach ($student->courses as $course)
                                @foreach ($tutor as $teacher)
                                @if ($teacher->name == $course->name)
                                    <tr>
                                        <td class="p-4">{{$student->name}}</td>
                                        <td class="p-4">{{$student->email}}</td>
                                            @if ($student->suspend == '0')
                                                <td class="p-4">Student</td> <td><button class="btn btn-danger w-100"><a class="text-white text-decoration-none" href="{{url ('/tutor/suspend')}}/{{$student->id}}">Suspend</a></button></td>
                                            @elseif($student->suspend == '1')
                                                <td class="p-4">Student</td> <td><button class="btn btn-primary w-100"><a class="text-white text-decoration-none" href="{{url ('/tutor/unsuspend')}}/{{$student->id}}">Unsuspend</a></button></td>
                                            @endif
                                        <td class="p-4">{{$course->name}}</td>
                                        <td class="p-4"><a href="{{url ('/tutor/submissions')}}/{{$student->id}}">View Submissions</a></td>
                                    </tr>
                                    @endif
                                    @endforeach 
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>   
        </div>
    </div>

@endsection