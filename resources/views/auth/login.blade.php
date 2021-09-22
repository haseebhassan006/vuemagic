@extends('layouts.backend.authmaster')

@section('content')
{{--
    <div class="row">
        <div class="col mx-auto">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-12">
                    <div class="row p-0 m-0">
                        <div class="col-lg-6 p-0">
                            <div class="text-justified text-white p-5 register-1 overflow-hidden">
                                <div class="custom-content">
                                    <div class="mb-5 br-7">
                                        <img src="{{ asset('backend/assets/images/brand/logo1.png') }}" class="header-brand-img desktop-lgo" alt="Azea logo">
                                    </div>
                                    <div class="ms-5">
                                        <div class="fs-18 mb-6 font-weight-bold text-white">Welcome Back To American Direct Lender!</div>
                                        <div class="mb-6 text-white-50">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem et esse in velit deleniti facilis quo!
                                        </div>
                                        <h6 class="text-white-50">Don't Have an Account?</h6>
                                        <a href="{{ route('register') }}" class="btn btn-white text-primary text-transparent font-weight-bold ">Create Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-6 p-0 mx-auto">
                        <div class="bg-white text-dark br-7 br-tl-0 br-bl-0">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <h1 class="mb-2">Log In</h1>
                                    <a href="javascript:void0;" class="">Hello There !</a>
                                </div>
                                <form class="mt-5" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <div class="input-group mb-4">
                                            <div class="input-group-text">
                                                <i class="fe fe-user"></i>
                                            </div>
                                        <input type="text"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group" id="Password-toggle">
                                            <a href="" class="input-group-text">
                                            <i class="fe fe-eye" aria-hidden="true"></i>
                                            </a>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" />
                                            <span class="custom-control-label">Remember Me</span>
                                        </label>
                                    </div>
                                    <div class="form-group text-center mb-3">
                                        <button type="submit" class="btn btn-primary btn-lg w-100 br-7">Log In</button>
                                    </div>
                                    <a href="{{ route('password.request') }}">
                                        <div class="form-group fs-13 text-center">
                                            Forget Password ?
                                        </div></a>

                                    <div class="form-group fs-14 text-center font-weight-bold">
                                        {{-- <a href="javascript:void0;">Click Here To Backup Mail</a> --}}


    <div class="row">
        <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{asset('/assets/images/login/3.jpg')}}" alt="looginpage"></div>
        <div class="col-xl-7 p-0">
          <div class="login-card">
            <form method="POST" class="theme-form login-form needs-validation" novalidate="" action="{{ route('login') }}">
              @csrf
                <h4>Login</h4>
              <h6>Welcome back! Log in to your account.</h6>
              <div class="form-group">
                <label>Email Address</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                  <input class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" type="email" required="" placeholder="Test@gmail.com">
                  <div class="invalid-tooltip">Please enter proper email.</div>
                  @error('email')
                  <div class="invalid-tooltip">
                      <strong>{{ $message }}</strong>
                    </div>
                 @enderror
                </div>
              </div>
              <div class="form-group">
                <label>Password</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                  <input class="form-control @error('password') is-invalid  @enderror" type="password" name="password" required="" placeholder="*********">
                  <div class="show-hide"><span class="show"> </span></div>
                  @error('password')
                  <div class="invalid-tooltip">
                      <strong>{{ $message }}</strong>
                  </div>
                  @enderror
                  <div class="invalid-tooltip">Please enter password.</div>

                </div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <input id="checkbox1" type="checkbox">
                  <label class="text-muted" for="checkbox1">Remember password</label>
                </div><a class="link" href="{{ route('password.request') }}">Forgot password?</a>
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Sign in</button>
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
              <p>Don't have account?<a class="ms-2" href="{{ route('register') }}">Create Account</a></p>
            </form>
          </div>
        </div>
      </div>

@endsection
@push('scripts')
<script>
    (function() {
    'use strict';
    window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
    event.preventDefault();
    event.stopPropagation();
    }
    form.classList.add('was-validated');
    }, false);
    });
    }, false);
    })();
  </script>
@endpush




