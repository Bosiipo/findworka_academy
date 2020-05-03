@extends('layouts.app')

@section('content')
<div class="d-flex" id="wrapper">
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <!-- Sidebar -->
    @include('student.include.sidemenu')
    <!-- /#sidebar-wrapper -->

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

      <div class="container-fluid">
        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">Course</th>
                    <th scope="col" class="text-center">Duration</th>
                    <th scope="col" class="text-center">Content</th>
                    <th scope="col" class="text-center">Description</th>
                    <th scope="col" class="text-center">Syllabus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-4">{{$course->name}}</td>
                    <td class="p-4">{{$course->duration}} months</td>
                    <td class="p-4">{{$course->content}}</td>
                    <td class="p-4">{{$course->description}}</td>
                    {{-- <td class="p-4">Some shid</td> --}}
                    {{-- {{-- <td class="p-4">{{$course->duration}}</td> --}}
                    <td class="p-4"><button class="btn btn-primary btn-block"><a class="text-decoration-none text-white" href="{{url('/download')}}/{{$course->id}}">Download</a></button></td> 
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
  <!-- /#wrapper -->
@endsection
