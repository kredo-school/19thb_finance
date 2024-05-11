@extends('layouts.app')

@section('title', "Sign-in")

@section('content')
<div class="container-fluid position-relative m-0 p-0">
    <img src="images/bg_img_signin_register.jpg" alt="background_signIn" class="w-100" style="height: 140px;">

    <p class="h2 fw-bold color-Yellow position-absolute top-50 start-50 translate-middle" style="letter-spacing: .2rem;">Welcome to Money-Juu</p>
</div>

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-auto position-relative">
            <div class="row mb-2">
                {{-- <div class="outer-button-1">
                    <div class="inner-button-1 p-0"> --}}
                        <h2 class="h4 text-secondary text-center border border-3 rounded-3 shadow bg-white bg-opacity-50 ms-4 me-5 px-3 py-1" style="max-width: 150px; border: solid 3px #F7A072 !important;">{{ __('Sign In') }}</h2>
                    {{-- </div>
                </div> --}}
            </div>

            <div class="row mx-1 mb-2 position-absolute bottom-0 end-0">
                <img src="images/pink_pig.png" alt="pink_pig" class="opacity-75" style="max-width: 150px">
            </div>
        </div>
        {{-- <div class="row d-flex align-self-end">
            <img src="images/pink_pig.png" alt="pink_pig" class="opacity-75 img-fluid float-end" style="max-width: 150px">
        </div> --}}
        
        <div class="col-md-auto d-flex align-items-stretch">
            <div class="card mx-3 p-0">
                <div class="card-body border border-3 px-5 py-4 bg-color-Background" style="max-width: 500px;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-1">
                            <label for="email" class="col-form-label text-md-start py-0">{{ __('Email') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="&#xf003;" style="font-family: FontAwesome;" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="password" class="col-form-label text-md-start py-0">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xf023;" style="font-family: FontAwesome;" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 p-0">
                            <div class="mb-2">
                                <button type="submit" class="btn btn-main fw-bold rounded-pill w-100" style="letter-spacing: .1rem;">
                                    {{ __('Sign In') }}
                                </button>
                            </div>

                            <div>
                                <div class="form-check d-inline ps-1">
                                    <input class="form-check-input ms-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-secondary" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link text-decoration-none fw-semibold color4 text-md-start d-inline" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                                @endif

                                <a class="btn btn-link text-decoration-none fw-semibold color4 text-start d-block" href="{{ route('register') }}">
                                    {{ __('Create an Account') }}
                                </a>

                                <a class="btn btn-link text-decoration-none fw-semibold color4 text-start d-block" href="#">
                                    {{ __('Privacy & Terms') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-auto"></div>
    </div>
</div>
@endsection
