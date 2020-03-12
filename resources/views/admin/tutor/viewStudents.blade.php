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
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        {{-- <th scope="col">Course</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                {{-- dd({{$student->courses}}); --}}
                                {{-- @if($student->courses->where('id', $course->id)->count() > 0)
                                    @foreach ($student->courses as $course)
                                
                                        <td>{{$course->name}}</td>
                                    @endforeach
                                    @else
                                        <td>Yet to pay and register</td>
                                @endif --}}
                                
                                
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
            
        </div>
    </div>
</section>




@endsection