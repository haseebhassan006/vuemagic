@extends('layouts.backend.authmaster')

@section('content')
<div class="col-12 p-0">
    <div class="login-card">
      <form class="theme-form login-form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <h4 class="mb-3">Reset Password</h4>

        <div class="form-group">
          <label>Enter</label>
          <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
            <input class="form-control" type="email" name="email" required="" placeholder="Enter Email">
          </div>
        </div>

        <div class="form-group">
          <button class="btn btn-primary btn-block" type="submit">Send</button>
        </div>

      </form>
    </div>
  </div>
{{-- <div class="row">
    <div class="col mx-auto">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-12">
                <div class="row p-0 m-0">
                    <div class="col-lg-6 p-0">
                        <div class="text-justified text-white p-5 register-1  overflow-hidden">
                            <div class="custom-content">
                                <div class="mb-5 br-7">
                                    <img src="{{ asset('backend/assets/images/brand/logo1.png') }}" class="header-brand-img desktop-lgo" alt="Azea logo">
                                </div>
                                <div class="ms-5">
                                    <div class="fs-16 mb-6 font-weight-bold text-white">Welcome Back To Azea !</div>
                                    <div class="mb-6 text-white-50">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem deleniti facilis quo!
                                    </div>
                                    <h6 class="text-white-50">Subscribe For More .</h6>
                                    <a href="{{ route('index') }}" class="btn btn-white text-primary font-weight-bold ">Visit Page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-6 p-0 mx-auto">
                    <div class="bg-white text-dark br-7 br-tl-0 br-bl-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <h1 class="mb-2">{{ __('Reset Password') }}</h1>
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            </div>
                            <form class="mt-5" method="POST" action="{{ route('password.email') }}">
                                {{ csrf_field() }}
                                <div class="input-group mb-4">
                                        <div class="input-group-text">
                                            <i class="fe fe-mail"></i>
                                        </div>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                       @enderror
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" />
                                        <span class="custom-control-label">Send recovery mail</span>
                                    </label>
                                </div>
                                <div class="form-group text-center mb-3">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 br-7"> {{ __('Send Password Reset Link') }}</button>
                                </div>
                                <div class="form-group fs-12 text-center">
                                    By Clicking Send,You agree to our  <a href="javascript:void0;" class="font-weight-bold">Terms & Conditions</a> and have read and acknowledge our  <a href="javascript:void0;" class="font-weight-bold">Privacy & Services.</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
