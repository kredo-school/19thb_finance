@extends('layouts.app')

@section('title', "Inquiry")

@section('content')
<div class="container-fluid position-relative m-0 p-0">
    <img src="images/bg_img_aboutUs_faq_inquiry.jpg" alt="background_Inquiry" class="w-100" style="height: 140px;">

    <img src="images/balloon.png" alt="balloon" class="opacity-75 position-absolute top-50 end-0 translate-middle" style="height: 140px;">
    
    <img src="images/card.png" alt="card" class="z-0 position-absolute top-50 start-50 translate-middle" style="width: 160px; height: 130px;">

    <h2 class="color3 position-absolute bottom-0 start-50 translate-middle" style="letter-spacing: .1rem;">Inquiry</h2>
</div>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-auto position-relative">
            <div class="row mb-2">
                <a class="h4 fw-semibold text-secondary btn border border-3 rounded-3 shadow mx-3 px-3 py-1" style="max-width: 150px;" href="#">{{ __('About Us') }}</a>
            </div>

            <div class="row mb-2">
                <a class="h4 fw-semibold text-secondary btn border border-3 rounded-3 shadow mx-3 px-3 py-1" style="letter-spacing: .1rem; max-width: 150px;" href="#">{{ __('FAQ') }}</a>
            </div>

            <div class="row mb-2">
                <p class="h5 text-secondary text-center border border-3 rounded-3 shadow bg-white bg-opacity-50 mx-3 px-3 py-1" style="max-width: 150px; border: solid 3px #F7A072 !important;">{{ __('Inquiry Form') }}</p>
            </div>

            <div class="row mx-3 mb-2 position-absolute bottom-0 end-0">
                <img src="images/pink_pig.png" alt="pink_pig" class="opacity-75" style="max-width: 150px">
            </div>
        </div>
        
        <div class="col-md-auto d-flex align-items-stretch">
            <div class="card mx-3 p-0">
                <div class="card-body border border-3 px-5 py-4 bg-color-Background" style="max-width: 500px;">
                    <form method="POST" action="{{ route('inquiry.store') }}">
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
                            <label for="inquiry subject" class="col-form-label text-md-start py-0">{{ __('Inquiry Subject') }}</label>

                            <div>
                                <input id="inquiry subject" list="datalistOptions" class="form-control @error('inquiry subject') is-invalid @enderror" name="inquiry subject" value="{{ old('inquiry subject') }}" placeholder="&#xf0cb;" style="font-family: FontAwesome;" required>
                                <datalist id="datalistOptions">
                                    <option value="1. General Inquiry">
                                    <option value="2. Account-related Issue">
                                    <option value="3. Payment Issue">
                                    <option value="4. Bug Report">
                                    <option value="5. Feature Request">
                                    <option value="6. Other">
                                </datalist>

                                @error('inquiry subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="message" class="col-form-label text-md-start py-0">{{ __('Message') }}</label>

                            <div>
                                <textarea id="message" rows="3" class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" placeholder="&#xf27b;" style="font-family: FontAwesome;" required></textarea>

                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 p-0">
                            <div class="mb-2">
                                <button type="submit" class="btn btn-main fw-semibold rounded-pill w-100" style="letter-spacing: .1rem;">
                                    {{ __('Send') }}
                                </button>
                                @if (session('message'))
                                    <div class="fw-bold color4 mt-1">
                                        {{ session('message') }}
                                    </div>
                                @endif
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
