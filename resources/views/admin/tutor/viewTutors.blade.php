@extends('layouts.app')

@section('content')

<section>
    <div class="container m-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header font-weight-bold bg-dark text-white">Dashboard</div>
                    <div class="card-body">
                        @include('admin.include.sidemenu')      
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        {{-- <th scope="col">ID</th> --}}
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Course</th>
                        <th scope="col" class="w-25 text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($tutors as $tutor)
                            <tr>
                                {{-- <th scope="row">{{$tutor->id}}</th> --}}
                                <td class="pt-3">{{$tutor->name}}</td>
                                <td class="pt-3">{{$tutor->email}}</td>
                                @foreach ($tutor->courses as $course)
                                    <td class="pt-3">{{$course->name}}</td>
                                    {{-- dd({{$course->name}}); --}}
                                    <td>
                                        <button class="btn btn-primary">
                                            <a class="text-decoration-none text-dark" href='{{url("/admin/tutors/{$tutor->id}/edit")}}'>Edit</a>
                                        </button>
                                        <form method="post" action="{{ url('/admin/tutors')}}/{{$tutor->id}}" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger text-decoration-none text-dark">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
            
        </div>
    </div>
</section>




@endsection