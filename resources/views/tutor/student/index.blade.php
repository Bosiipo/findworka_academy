@extends('layouts.app')

@section('content')

<section>
    <div class="container m-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header font-weight-bold bg-dark text-white">Dashboard</div>
                    <div class="card-body">
                        @include('tutor.include.sidemenu')      
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        {{-- <th scope="col" class="text-center">ID</th> --}}
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">E-mail</th>
                        <th scope="col" class="text-center">Role</th>
                        <th scope="col" class="text-center">Action</th>
                        <th scope="col" class="text-center">Course</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        
                            <tr>
                                {{-- <th scope="row" class="p-4">{{$student->id}}</th> --}}
                                <td class="p-4">{{$student->name}}</td>
                                <td class="p-4">{{$student->email}}</td>
                                    @if ($student->suspend == '0')
                                        <td class="p-4">Student</td> <td><button class="btn btn-danger w-100"><a class="text-white text-decoration-none" href="{{url ('/tutor/suspend')}}/{{$student->id}}">Suspend</a></button></td>
                                    @elseif($student->suspend == '1')
                                        <td class="p-4">Student</td> <td><button class="btn btn-primary w-100"><a class="text-white text-decoration-none" href="{{url ('/tutor/unsuspend')}}/{{$student->id}}">Unsuspend</a></button></td>
                                    @endif
                                    @foreach ($student->courses as $course)
                                        <td class="p-4">{{$course->name}}</td>
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