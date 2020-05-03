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
                                <th scope="col">Assignment Title</th>
                                <th scope="col">Course</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($assignments as $assignment)
                                    <tr>
                                        <td>{{ $assignment->title }}</td>
                                        <td>{{ $assignment->course }}</td>
                                        <td>
                                            <button class="btn btn-primary">
                                                <a class="text-decoration-none text-dark" href='{{url("/tutor/assignments/{$assignment->id}/edit")}}'>Edit</a>
                                            </button>
                                            <button class="btn btn-secondary">
                                                <a class="text-decoration-none text-dark" href='{{url("/tutor/assignments/{$assignment->id}")}}'>View</a>
                                            </button>
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