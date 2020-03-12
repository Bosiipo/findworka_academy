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
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <th scope="row">{{$student->id}}</th>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
            
        </div>
    </div>
</section>




@endsection