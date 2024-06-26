@extends('layouts.app')

@section('title', "Register")

@section('content')
<div class="container-fluid position-relative m-0 p-0">
    <img src="images/bg_img_signin_register.jpg" alt="background_register" class="w-100" style="height: 140px;">

    <p class="h2 fw-semibold color-Yellow position-absolute top-50 start-50 translate-middle" style="letter-spacing: .2rem;">Welcome to Money-Juu</p>
</div>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-auto position-relative">
            <div class="row mb-2">
                <h2 class="h4 text-secondary text-center border border-3 rounded-3 shadow bg-white bg-opacity-50 mx-4 px-3 py-1" style="max-width: 150px; border: solid 3px #F7A072 !important;">{{ __('Register') }}</h2>
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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-1">
                            <label for="name" class="col-form-label text-md-start py-0">{{ __('Name') }}</label>

                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="&#xf2c0;" style="font-family: FontAwesome;" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="email" class="col-form-label text-md-start py-0">{{ __('Email') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="&#xf003;" style="font-family: FontAwesome;" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="password" class="col-form-label text-md-start py-0">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xf023;" style="font-family: FontAwesome;" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="password-confirm" class="col-form-label text-md-start py-0">{{ __('Confirm Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="&#xf023;" style="font-family: FontAwesome;" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0 p-0">
                            <div class="mb-2">
                                <button type="submit" class="btn btn-main fw-semibold rounded-pill w-100" style="letter-spacing: .1rem;">
                                    {{ __('Register') }}
                                </button>
                            </div>

                            <div class="row row-cols-1 row-cols-md-2 row-cols-1">
                                <div class="col-md-7 p-0">
                                    <a class="btn btn-link text-decoration-none fw-semibold color4 text-md-start d-inline" href="{{ route('login') }}">
                                        {{ __('I already have an account') }}
                                    </a>
                                </div>

                                <div class="col-md-5 p-0">
                                    <a class="btn btn-link text-decoration-none fw-semibold color4 text-md-start d-inline" href="{{ url('/privacyandterms') }}">
                                        {{ __('Privacy & Terms') }}
                                    </a>
                                </div>
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
