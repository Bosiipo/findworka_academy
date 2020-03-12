{{-- @extends('layouts.app')
    @section('content') --}}
        
            {{-- <h5>User Management</h5> --}}
            <ul class="pl-4" class="list-unstyled" style="color: black;">
                <li><a href="{{url ('/admin')}}" class="text-decoration-none font-weight-bold">View All Users</a></li>
                <li><a href="{{url ('/admin/tutor/create')}}" class="text-decoration-none font-weight-bold">Create Tutor</a></li>
                <li><a href="{{url ('/admin/tutors')}}" class="text-decoration-none font-weight-bold">View Tutors</a></li>
                <li><a href="{{url ('/admin/students')}}" class="text-decoration-none font-weight-bold">View Students</a></li>
                <li><a href="{{url ('/admin/courses')}}" class="text-decoration-none font-weight-bold">View Courses</a></li>
                
            </ul>
    {{-- @endsection --}}


