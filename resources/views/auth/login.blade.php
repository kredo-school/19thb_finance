@extends('layouts.app')

@section('title', "Sign-in")

@section('content')
<img src="" alt="">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <img src="/public/images/pink_pig" alt="pink_pig" class="img-fluid float-end">
        </div>

        <div class="col-md-4">
            <div class="card p-0">
                <div class="card-body border border-3 p-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <h2>{{ __('Sign In') }}</h2>
                            <p>
                                New to this website?
                                <a class="btn btn-link text-decoration-none" href="#">
                                    {{ __('Create an Account') }}
                                </a>
                            </p>

                            <label for="email" class=" col-form-label text-md-start">{{ __('Email') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-form-label text-md-start">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 p-0">
                            <div>
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Sign In') }}
                                </button>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link text-md-start text-decoration-none d-block" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif

                            <a class="btn btn-link text-md-start text-decoration-none d-block" href="#">
                                {{ __('Privacy & Terms') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
