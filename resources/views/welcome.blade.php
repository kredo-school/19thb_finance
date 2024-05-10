@extends('layouts.app')

@section('title', "Money-Juu")

@section('content')
<div class="container-fluid position-relative m-0 p-0">
    <div class="bg-dark">
        <img src="images/bg_img_landing_learnMore.jpg" alt="background_Money-Juu" class="img-fluid opacity-75">
    </div>
    
    <div class="row d-flex align-items-center p-0">
        <div class="col-md-11 offset-md-1">
            <div class="position-absolute top-50 start-50 translate-middle">
                <h1 class="fw-bold text-white" style="letter-spacing: .2rem;">Have Fun Saving</h1>

                <p class="h5 fw-bold color4 mb-4" style="letter-spacing: .1rem;">Learn more on our website by signing in now.</p>

                <div class="d-flex flex-row">
                    <div class="col-md-4">
                        @if (Route::has('login'))
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="btn btn-main fw-bold color-Background bg-color4 rounded-pill w-100 px-3" style="letter-spacing: .1rem;"
                                >
                                    Sign In
                                </a>
    
                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="btn btn-link h4 fw-bold color4 text-md-start d-block" style="letter-spacing: .1rem;"
                                    >
                                        Create Acount
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>

                    <div class="col-md-4 offset-md-4 ms-2">
                        <a class="btn btn-main-1 fw-bold rounded-pill w-100 px-3" style="letter-spacing: .1rem;" href="#">{{ __('Learn More') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
