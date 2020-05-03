<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Findworka Academy</div>
    <div class="list-group list-group-flush">
      <a href="{{url ('/central_dashboard')}}" class="list-group-item list-group-item-action bg-light">Profile</a>
      <a href="{{url ('/student/assignments')}}" class="list-group-item list-group-item-action bg-light">View Assignments</a>
      <a href="{{url ('/student/payments')}}" class="list-group-item list-group-item-action bg-light">Payment History</a>
      <a href="{{url ('/student/submissions')}}" class="list-group-item list-group-item-action bg-light">View Performance</a>

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
