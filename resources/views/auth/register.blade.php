@extends('layouts.backend.authmaster')

@section('content')
<div class="row m-0">
    <div class="col-xl-5"><img class="bg-img-cover bg-center" src="../assets/images/login/3.jpg" alt="looginpage"></div>
    <div class="col-xl-7 p-0">
      <div class="login-card">
        <form class="theme-form login-form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
          <h4>Create your account</h4>
          <h6>Enter your personal details to create account</h6>
          <div class="form-group">
            <label>Your Name</label>
            <div class="form-group">
              <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                <input class="form-control @error('name') is-invalid @enderror" type="text" value="{{ old('name') }}"  placeholder="Name" name="name">
              </div>
              @error('name')
              <div class="invalid-tooltip">
              {{ $message }}
              </div>
             @enderror

            </div>
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                <input class="form-control @error('email') is-invalid @enderror"  id="email" type="email" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Enter Email Address">
            </div>
            @error('email')
            <div class="invalid-tooltip">
              {{ $message }}
              </div>
         @enderror
          </div>
          <div class="form-group">
            <label>Password</label>
            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                <input class="form-control" id="password" type="password" name="password" required="" autocomplete="new-password" placeholder="Enter Password">
              <div class="show-hide"><span class="show">                         </span></div>
              @error('password')
              <div class="invalid-tooltip">
                  <strong>{{ $message }}</strong>
              </div>
          @enderror
            </div>
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
              <input id="password-confirm" type="password" class="form-control" id="password"   name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
              <div class="show-hide"><span class="show">                         </span></div>
            </div>
            @error('password_confirmation')
              <div class="invalid-tooltip">
                  <strong>{{ $message }}</strong>
              </div>
          @enderror

          </div>

          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Create Account</button>
          </div>
          <div class="login-social-title">
            <h5>Sign in with</h5>
          </div>
          <div class="form-group">
            <ul class="login-social">
              <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="linkedin"></i></a></li>
              <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="facebook"></i></a></li>
              <li><a href="https://www.instagram.com/login" target="_blank"><i data-feather="instagram">                  </i></a></li>
            </ul>
          </div>
          <p>Already have an account?<a class="ms-2" href="{{ route('login') }}">Sign in</a></p>
        </form>
      </div>
    </div>
  </div>

{{-- <div class="col-xl-7 p-0">

<div class="login-card">
      <form class="theme-form login-form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <h4>Create your account</h4>
        <h6>Enter your personal details to create account</h6>
        <div class="form-group">
          <label>Your Name</label>
          <div class="input-group">
            <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
              <input class="form-control @error('name') is-invalid @enderror" type="text"  placeholder="Name" name="name">
            </div>
            @error('name')
            <div class="invalid-tooltip">
            {{ $message }}
            </div>
           @enderror

          </div>
        </div>
        <div class="form-group">
          <label>Email Address</label>
          <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
            <input class="form-control @error('name') is-invalid @enderror"  id="email" type="email" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Enter Email Address">

          </div>
          @error('email')
          <div class="invalid-tooltip">
            {{ $message }}
            </div>
      @enderror
        </div>
        <div class="form-group">
          <label>Password</label>
          <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
            <input class="form-control" id="password" type="password" name="password" required="" autocomplete="new-password" placeholder="Enter Password">
            <div class="show-hide"><span class="show">                         </span></div>
          </div>
          @error('password')
          <div class="invalid-tooltip">
              <strong>{{ $message }}</strong>
          </div>
      @enderror
        </div>
        <div class="form-group">
        <label>Confirm Password</label>
        <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
          <input id="password-confirm" type="password" class="form-control" id="password" type="password"  name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
          <div class="show-hide"><span class="show">                         </span></div>
        </div>

      </div>
        <div class="form-group">
          <div class="checkbox">
            <input id="checkbox1" type="checkbox">
            <label class="text-muted" for="checkbox1">Agree with <span>Privacy Policy                   </span></label>
          </div>
        </div>
        <div class="form-group">
          <button class="btn btn-primary btn-block" type="submit">Create Account</button>
        </div>
        <div class="login-social-title">
          <h5>Sign in with</h5>
        </div>
        <div class="form-group">
          <ul class="login-social">
            <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="linkedin"></i></a></li>
            <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="facebook"></i></a></li>
            <li><a href="https://www.instagram.com/login" target="_blank"><i data-feather="instagram">                  </i></a></li>
          </ul>
        </div>
        <p>Already have an account?<a class="ms-2" href="sign-in.html">Sign in</a></p>
      </form>
    </div>
  </div> --}}


@endsection
