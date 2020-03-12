@extends('layouts.app')

@section('content')

<section>
    <div class="container m-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header font-weight-bold bg-dark text-white">Dashboard</div>
                    <div class="card-body">
                        @include('student.include.sidemenu')      
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="container">
                    <h3 class="text-center font-weight-bold">{{$assignment->title}}</h3>
                    <p class="text-center font-weight-bold lead">{{$assignment->content}}</p>
                </div>
            
            </div>
            
        </div>
    </div>
</section>




@endsection