@extends('layouts.app')

@section('content')

<section>
    <div class="container m-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header font-weight-bold bg-dark text-white">Dashboard</div>
                    <div class="card-body">
                        @include('admin.include.sidemenu')      
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        {{-- <th scope="col">ID</th> --}}
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Content</th>
                        <th scope="col">Price</th>
                        <th scope="col" class="w-25 text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                {{-- <th scope="row">{{$course->id}}</th> --}}
                                <td>{{$course->name}}</td>
                                <td>{{$course->description}}</td>
                                <td>{{$course->content}}</td>
                                <td>{{$course->price}}</td>
                                <td class="text-center">
                                    <button class="btn btn-primary">
                                        <a class="text-decoration-none text-dark" href='{{url("/admin/courses/{$course->id}/edit")}}'>Edit</a>
                                    </button>
                                    <form method="post" action="{{ url('/admin/courses')}}/{{$course->id}}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger text-decoration-none text-dark">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button class="btn btn-primary btn-block"><a href="{{url('/admin/courses/create')}}" class="text-decoration-none text-white">Create Course</a></button>
            </div>
            
        </div>
    </div>
</section>




@endsection