@extends('layouts.masterhtml')

@section('content')

<div class="col-md-12">
    <div class="container">
        <div class="col-md-12">
            <h1 class="mt-2" style="font-family: 'PT Serif', serif !important;">CONTACT</h1>
        </div>
        <div class="card" style="border:none; box-shadow: none;">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
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
                    </div>
                    <div class="col-md-6">
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
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mt-4">
                        <label for="description" class="col-md-12 col-form-label description">{{ __('Description') }}</label>

                        <div class="col-md-12">
                            <textarea id="description" class="form-control" name="description" rows="4" cols="50"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-outline-dark sign-up-btn" style="float:right;">Send</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-12 mb-1">
            <div class="row">
                <div class="col-md-4">
                    <a href="" class="face-pro"><i style="color: rgb(0,147,248) !important" class="fab fa-facebook fa-2x mr-1"></i>thihaaung</a>
                </div>
                <div class="col-md-4">
                    <a href="" class="face-pro"><i style="color: rgb(52, 176, 40) !important" class="fas fa-phone-alt fa-2x mr-1"></i>+959795864194</a>
                </div>
                <div class="col-md-4">
                    <a href="" class="face-pro"><img src="https://img.icons8.com/fluent/48/000000/gmail--v1.png" class="mr-1" width="40" height="40" />thihaeung@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .face-pro:hover{
        text-decoration: none;
        color: rgb(33,37,41);
    }
    .face-pro{
        color: rgb(33,37,41);
        font-family: 'PT Serif', serif !important;
    }
</style>

@endsection

