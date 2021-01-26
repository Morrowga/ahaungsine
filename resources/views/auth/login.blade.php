@extends('layouts.app')

@section('content')
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 login-section">
            <h1 class="head-text-sign"><strong style="font-size: 90px;">S</strong>IGN IN</h1>
            <h1 class="head-text-sign" style="border-bottom: 2px solid rgb(33,37,41,0.5);">YOUR ACCOUNT</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group mt-4">
                    <label for="email" class="col-md-12 col-form-label email">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-12 col-form-label password">{{ __('Password') }}</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12 ml-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label pl-1 pt-1" for="remember" style="font-family: 'PT Sans', sans-serif;">
                                {{ __('Remember') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link forget" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <button type="submit" class="btn btn-outline-dark sign-in-btn" style="float: right;">
                            {{ __('SIGN IN') }}
                        </button>
                    </div>
                </div>
            </form>
            <p style="text-align:center; font-family: 'PT Serif', serif !important;">__________OR__________</p>
            <div class="col-md-12" style="text-align:center;">
                <button class="btn btn-info btn-block facebook" >Sign In with <i style="color: #fff !important" class="fab fa-facebook fa-2x"></i>acebook</button>
            </div>
            <p style="text-align:center; font-family: 'PT Serif', serif !important;">__________OR__________</p>
            <div class="col-md-12">
                <button class="btn btn-info btn-block gmail" >Sign In with <img src="https://img.icons8.com/cute-clipart/64/000000/google-logo.png" width="30" height="30"/>oogle</button>
            </div>
            <div class="col-md-12 mt-2" style="text-align:center;">
                <p class="link-in">If you hasn't account<a href="/signup" class="mt-2 link-in-a" style="font-size: 22px;"> SIGN UP </a>Here!</p>
            </div>
        </div><!--login-col-->
        <div class="col-md-6 image-wall">
        </div><!--image-col-->
    </div><!--row-->
</div><!--container-->
@endsection


 