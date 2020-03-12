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
                        {{-- <th scope="col" class="text-center">ID</th> --}}
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">E-mail</th>
                        <th scope="col" class="text-center">Role</th>
                        <th scope="col" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                {{-- <th scope="row" class="p-4">{{$user->id}}</th> --}}
                                <td class="p-4">{{$user->name}}</td>
                                <td class="p-4">{{$user->email}}</td>
                                    @if ($user->privilege_id == '1')
                                        <td class="p-4">Student</td> <td><button class="btn btn-primary w-100"><a class="text-white text-decoration-none" href="{{url ('/admin/assign')}}/{{$user->id}}">Assign Tutor</a></button></td>
                                    @elseif($user->privilege_id == '2')
                                        <td class="p-4">Tutor</td> <td><button class="btn btn-danger w-100"><a class="text-white text-decoration-none" href="{{url ('/admin/unassign')}}/{{$user->id}}">Unassign Tutor</a></button></td>
                                    @elseif($user->privilege_id == '3')
                                        <td class="p-4">Admin</td> <td class="pl-5 p-4">None</td>
                                    @endif
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
            
        </div>
    </div>
</section>




@endsection