@extends('layouts.app')

@section('title', "Money-Juu")

@section('content')
<div class="container-fluid position-relative m-0 p-0">
    <div class="bg-dark">
        <div class="bg-img opacity-75"></div>
        {{-- <img src="images/bg_img_landing_learnMore.jpg" alt="background_Money-Juu" class="img-fluid opacity-75"> --}}
    </div>
    
    <div class="row d-flex align-items-md-center m-0 p-0" style="max-width: 1000px;">
        <div class="col-md-11 offset-md-1">
            <div class="position-absolute top-50 start-50 translate-middle my-2 px-5 py-0 w-100">
                <h1 class="fw-bold text-white" style="letter-spacing: .2rem;">Have Fun Saving</h1>

                <p class="h5 fw-semibold color4" style="letter-spacing: .1rem;">Learn more on our website by signing in now.</p>

                <div class="d-flex flex-row my-3" style="max-width: 800px;">
                    <div class="col-md-4">
                        @if (Route::has('login'))
                            @auth
                                <a
                                    href="#"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                ></a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="btn btn-main fw-semibold rounded-pill w-100" style="letter-spacing: .1rem;"
                                >
                                    Sign In
                                </a>
    
                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="btn btn-link fw-semibold color4 text-md-start d-block" style="letter-spacing: .1rem;"
                                    >
                                        Create Acount
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>

                    <div class="col-md-4 offset-md-4 ms-2">
                        <a class="btn btn-main-1 fw-semibold rounded-pill px-4 w-100" style="letter-spacing: .1rem;" href="{{ route('learnMore') }}">{{ __('Learn More') }}</a>
                    </div>
                </div>

                <div class="container d-flex justify-content-start m-0 p-0">
                    <div class="row row-cols-1 row-cols-lg-4 row-cols-2">
                        <div class="col">
                            <div class="card card-body rounded-4 my-1 px-4" style="background-color: rgba(217, 217, 217, 0.5); width: 200px;">
                                <div class="d-flex flex-row">
                                    <img src="{{ asset('images/calendar-icon.png') }}" alt="calendar_icon" style="max-width: 30px;" class="py-2">
                                    <p class="h4 text-white mx-3 my-2" style="text-shadow: 1px 1px 2px #343A40">Calendar</p>
                                </div>
    
                                <div class="d-flex">
                                    <img src="{{ asset('images/calender-sample.png') }}" alt="calendar_sample"  style="width: 150px; height: 110px;">
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card card-body rounded-4 my-1 px-4" style="background-color: rgba(217, 217, 217, 0.5); width: 200px;">
                                <div class="d-flex flex-row">
                                    <img src="{{ asset('images/entry-icon.png') }}" alt="entry_icon" style="max-width: 30px;" class="py-2">
                                    <p class="h4 text-white mx-3 my-2" style="text-shadow: 1px 1px 2px #343A40">Entry</p>
                                </div>
    
                                <div class="d-flex">
                                    <img src="{{ asset('images/entry-sample.png') }}" alt="entry_sample" style="width: 150px; height: 110px;">
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card card-body rounded-4 my-1 px-4" style="background-color: rgba(217, 217, 217, 0.5); width: 200px;">
                                <div class="d-flex flex-row">
                                    <img src="{{ asset('images/analysis-icon.png') }}" alt="analysis_icon" style="max-width: 30px;" class="py-2">
                                    <p class="h4 text-white mx-3 my-2" style="text-shadow: 1px 1px 2px #343A40">Analysis</p>
                                </div>
    
                                <div class="d-flex">
                                    <img src="{{ asset('images/analysis-sample.png') }}" alt="analysis_sample" style="width: 150px; height: 110px;">
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card card-body rounded-4 my-1 px-4" style="background-color: rgba(217, 217, 217, 0.5); width: 200px;">
                                <div class="d-flex flex-row">
                                    <img src="{{ asset('images/account-icon.png') }}" alt="account_icon" style="max-width: 30px;" class="py-2">
<<<<<<< HEAD
                                    <a href="{{ route('profile.edit') }}" class="h4 text-white mx-3 my-2" style="text-shadow: 1px 1px 2px #343A40">Account</a>
                                    {{-- <p class="h4 text-white mx-3 my-2" style="text-shadow: 1px 1px 2px #343A40">Account</p> --}}    
                            </div>
=======
                                    {{-- <p class="h4 text-white mx-3 my-2" style="text-shadow: 1px 1px 2px #343A40">Account</p> --}}
                                    <a href="{{ route('profile.edit') }}" class="h4 text-white mx-3 my-2" style="text-shadow: 1px 1px 2px #343A40">Account</a>
                                </div>
>>>>>>> main
    
                                <div class="d-flex">
                                    <img src="{{ asset('images/account-sample.png') }}" alt="account_sample" style="width: 150px; height: 110px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
