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

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    @if (count($assignments) > 0)
                    <table class="table mt-5">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">Assignment Title</th>
                            <th scope="col" class="text-center">Course</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assignments as $assignment)
                        <tr>
                            <td class="text-center">{{ $assignment->title }}</td>
                            <td class="text-center">{{ $assignment->course }}</td>
                        @if($assignment->done == 'completed')
                            <td>
                                <button class="btn btn-danger text-decoration-none text-white btn-block">
                                    Submitted
                                </button> 
                            </td>
                        @elseif($assignment->done == 'uncompleted')
                            <td>
                                <form method="post" action="{{ url('/student/submissions')}}" class="d-inline">
                                    @csrf
                                    <button class="btn btn-primary text-decoration-none text-dark" style="width: 40%">
                                        <a class="text-decoration-none text-dark" href='{{url("/student/submissions/create/{$assignment->id}")}}'>Submit</a>
                                    </button>
                                </form>
                                <button class="btn btn-secondary ml-3" style="width: 40%;">
                                    <a class="text-decoration-none text-dark" href='{{url("/student/assignments/{$assignment->id}")}}'>View</a>
                                </button>
                            </td>
                        @endif           
                        </tr>                
                        @endforeach
                        </tbody>
                    </table>               
                    @else
                        <table class="table mt-5">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>There's no assignments!</td>
                                </tr>
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection

