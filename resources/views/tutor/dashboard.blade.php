@extends('layouts.app')

@section('content')

<section class="m-3">
    {{-- <div class="container m-2"> --}}
        <div class="row">
            {{-- <!-- start of a sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                @include('tutor.include.sidemenu')
            </div> --}}
            <div class="col-lg-3 col-sm-4">
                <div class="card">
                    <div class="card-header font-weight-bold bg-dark text-white">Dashboard</div>
                    <div class="card-body">
                        @include('tutor.include.sidemenu')      
                    </div>
                </div>
            </div>
       
            <div class="col-lg-9 col-sm-8">
                <h1 class="d-flex justify-content-end">Welcome back, {{Auth::user()->name}}</h1>   
            </div>
                
            
            
        </div>

    {{-- </div> --}}
    
    
</section>




@endsection