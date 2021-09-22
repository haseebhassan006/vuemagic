 <!-- HEADER -->
 <header class="head">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="{{asset('frontend/assets/images/header-logo.png')}}" class="img-fluid"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}" aria-current="page" href="{{route('index')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('refinance') ? 'active' : '' }}" href="{{route('refinance')}}">Refinance</a>
                  </li>

                  {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Learning Center</a>
                  </li> --}}

                  <li class="nav-item">
                    <a class="nav-link" href="#">Rate</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                  </li>
                 @guest
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                  </li>
                  @else
                  <li class="nav-item">
                    <a class="nav-link"  href="{{ route('logout') }}"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </a>
                  </li>
                  @endguest




                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- HEADER -->
