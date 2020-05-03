<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Findworka Academy</div>
    <div class="list-group list-group-flush">
      <a class="list-group-item list-group-item-action bg-light" href="{{url ('/central_dashboard')}}">Profile</a>
      <a class="list-group-item list-group-item-action bg-light"  href="{{url ('/tutor/students')}}">View Students</a>
      <a class="list-group-item list-group-item-action bg-light"  href="{{url ('/tutor/assignments/create')}}">Create Assignment</a>
      <a class="list-group-item list-group-item-action bg-light"  href="{{url ('/tutor/assignments')}}">View Assignments</a>
      {{-- <a class="list-group-item list-group-item-action bg-light"  href="{{url ('/tutor/submissions')}}">View Submissions</a> --}}

      <!-- Authentication Links -->
      @guest
        <a class="text-decoration-none text-white nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>     
      @if (Route::has('register'))         
        <a class="text-decoration-none text-white nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>          
      @endif
      @else
        <a class="list-group-item list-group-item-action bg-light" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
 @endguest
    </div>
</div>


{{-- <ul class="pl-4 side-bar list-unstyled" style="display: block;">
    <li class="mb-4 mt-5"><h5><span class="b-l"></span><a class="text-decoration-none" style="color: black;" href="{{url ('/central_dashboard')}}">Profile</a></h5></li>
    <li class="mb-4"><h5><span class="b-l"></span><a class="text-decoration-none" style="color: black;"  href="{{url ('/tutor/students')}}">View Students</a></h5></li>
    <li class="mb-4"><h5><span class="b-l"></span><a class="text-decoration-none" style="color: black;"  href="{{url ('/tutor/assignments/create')}}">Create Assignment</a><h5></li>
    <li class="mb-4"><h5><span class="b-l"></span><a class="text-decoration-none" style="color: black;"  href="{{url ('/tutor/assignments')}}">View Assignments</a></h5></li>
</ul>  
    
<script>
function myFunction(x) {
    var sidebar = document.querySelector('.side-bar');
    var burger = document.querySelector('.burger');
    var sidemenu = document.querySelector('.side');

    if (burger.classList.contains('change')) {
        // sidebar.style.display = 'none';
        burger.classList.remove('change');
        sidemenu.classList.remove('sidemenu');
    } else {
        // sidebar.style.display = 'block';
        burger.classList.add('change');
        sidemenu.classList.add('sidemenu');

    }

}
</script> --}}
    

