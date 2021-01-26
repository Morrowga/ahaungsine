@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="head-text-sign"><strong style="font-size: 90px;">S</strong>IGN Up</h1>
            <h1 class="head-text-sign" style="border-bottom: 2px solid rgb(33,37,41,0.5);">YOUR ACCOUNT</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group mt-4">
                    <label for="name" class="col-md-12 col-form-label name">{{ __('Name') }}</label>

                    <div class="col-md-12">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-12 col-form-label email">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-12 col-form-label password">{{ __('Confirm Password') }}</label>

                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <a class="btn btn-link forget" href="{{ route('password.request') }}">
                               Warnining: {{ __('Give Strong Password') }}
                        </a>
                        <button type="button" class="btn btn-outline-dark sign-up-btn" data-toggle="modal" data-target="#exampleModal" style="float:right;">
                            {{ __('REGISTER') }}
                        </button>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" style="text-align:center !important;">
                        <div class="modal-content" style="text-align:center !important; background: linear-gradient(to top, #ada996, #f2f2f2, #dbdbdb, #eaeaea);">
                        <div class="modal-body">
                            <h3 class="agree"><strong style="font-size: 40px;">O</strong>UR AGREEMENTS</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark cancel" data-dismiss="modal">CANCEL</button>
                            <button type="submit" class="btn btn-outline-dark confirm">CONFIRM</button>
                        </div>
                        </div>
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
                <p class="link-in">If already has account<a href="/signin" class="mt-2 link-in-a" style="font-size: 22px;"> SIGN IN </a>Here!</p>
            </div>
        </div><!--register-col-->
        <div class="col-md-6 image-wall">
        </div><!--image-col-->
    </div><!--row-->
</div><!--container-->
@endsection
