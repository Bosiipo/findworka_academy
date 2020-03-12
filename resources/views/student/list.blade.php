@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                    @include('admin.include.sidemenu')      
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">List of users</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Middlename</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->firstname }}</td>
                                    <td>{{ $user->middlename }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>
                                        @foreach ($user->roles as $role)
                                            {{ $role->name }}
                                        @endforeach
                                    </td>
                                    <td><a href="{{ url('/fw/users/edit') }}/{{ $user->id }}">Edit User</a> | <a href="{{ url('fw/users') }}/{{ $user->id }}">View User</a></td>
                                </tr>
                            @endforeach
                        
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
