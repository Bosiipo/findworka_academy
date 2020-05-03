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
                                  <th scope="col" class="text-center">Grade</th>
                                  <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <form method="post" action="{{url ('/tutor/submissions/save')}}/{{$submission->id}}" class="d-inline">
                                    @csrf
                                    <td class="p-4">
                                        <div class="form-group row justify-content-center">
                                            <div class="col-md-6">
                                                <select name="grade" class="form-control" style="width: 100px;">
                                                    <option value>{{$submission->grade}}</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </div>
                                        </div> 
                                    </td>  
                                    
                                    <td class="p-4 text-center">
                                        <button class="btn btn-secondary text-decoration-none text-dark">
                                            Save
                                        </button>
                                    </td>
                                </form>                                   
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>   
        </div>
    </div>

@endsection