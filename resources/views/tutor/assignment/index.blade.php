@extends('layouts.app')

@section('content')

    <div class="container mt-5 mb-5" style="">
        <div class="row justify-content-center">

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header font-weight-bold bg-dark text-white">Dashboard</div>
                    <div class="card-body">
                        @include('tutor.include.sidemenu')      
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                {{-- <div class="card">
                    <div class="card-header">List of assignments</div>

                    <div class="card-body"> --}}
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                {{-- <th scope="col">ID</th> --}}
                                <th scope="col">Assignment Title</th>
                                <th scope="col">Course</th>
                                <th scope="col">Action</th>
                                {{-- <th scope="col">Role</th>
                                <th scope="col">Action</th> --}}
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
                    {{-- </div>
                </div> --}}
            </div>
        </div>
    </div>

@endsection