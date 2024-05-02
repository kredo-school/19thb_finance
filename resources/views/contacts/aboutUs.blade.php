@extends('layouts.app')

@section('title', "About Us")

@section('content')
<div class="container-fluid position-relative m-0 p-0">
    <img src="images/bg_img_aboutUs_faq_inquiry.jpg" alt="bg_img_signin_register" class="w-100" style="height: 140px;">

    <img src="images/balloon.png" alt="balloon" class="opacity-75 position-absolute top-50 end-0 translate-middle" style="height: 140px;">
    
    <img src="images/card.png" alt="card" class="z-0 position-absolute top-50 start-50 translate-middle" style="width: 160px; height: 130px;">

    <h2 class="fw-bold color3 position-absolute bottom-0 start-50 translate-middle" style="letter-spacing: .1rem;">About Us</h2>
</div>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-auto position-relative">
            <div class="row mb-2">
                <p class="h5 text-center border border-3 rounded-3 shadow bg-white bg-opacity-50 mx-3 px-3 py-1" style="max-width: 150px;">{{ __('About Us') }}</p>
            </div>

            <div class="row mb-2">
                <a class="h4 fw-bold btn border border-3 rounded-3 shadow mx-3 px-3 py-1" style="letter-spacing: .1rem; max-width: 150px;" href="#">{{ __('FAQ') }}</a>
            </div>

            <div class="row mb-2">
                <a class="h4 fw-bold btn border border-3 rounded-3 shadow mx-3 px-3 py-1" style="max-width: 150px;" href="#">{{ __('Inquiry Form') }}</a>
            </div>

            <div class="row position-absolute bottom-0 end-0">
                <img src="images/pink_pig.png" alt="pink_pig" class="opacity-75" style="max-width: 150px">
            </div>
        </div>
        
        <div class="col-md-auto d-flex align-items-stretch">
            <div class="card mx-3 p-0">
                <div class="card-body border border-3 px-5 py-4 bg-color-Background" style="max-width: 500px;">
                    <div class="row">
                        <p class="fs-6 fw-bold color-Muted mb-0 ps-2">Company Name</p>
                        <div class="bg-color-Rainbow ms-2" style="width: 10px; height: 2px;"></div>
                        {{-- <hr class="ms-2" style="width: 10px;"> --}}

                        <div class="col-md-11 offset-md-1">
                            <p class="fs-6 fw-bold mb-1">Cute Pig</p>
                        </div>
                    </div>

                    <div class="row">
                        <p class="fs-6 fw-bold color-Muted mb-0 ps-2">Adress</p>
                        <div class="bg-color-Rainbow ms-2" style="width: 10px; height: 2px;"></div>

                        <div class="col-md-11 offset-md-1">
                            <p class="fs-6 fw-bold mb-1">1-1-2 Oshiage, Sumida-ku, Tokyo 131-0045</p>
                        </div>
                    </div>

                    <div class="row">
                        <p class="fs-6 fw-bold color-Muted mb-0 ps-2">Established</p>
                        <div class="bg-color-Rainbow ms-2" style="width: 10px; height: 2px;"></div>

                        <div class="col-md-11 offset-md-1">
                            <p class="fs-6 fw-bold mb-1">April 1, 2024</p>
                        </div>
                    </div>

                    <div class="row">
                        <p class="fs-6 fw-bold color-Muted mb-0 ps-2">Mail</p>
                        <div class="bg-color-Rainbow ms-2" style="width: 10px; height: 2px;"></div>

                        <div class="col-md-11 offset-md-1">
                            <p class="fs-6 fw-bold mb-2">Money_juu @gmil .com</p>
                        </div>
                    </div>

                    <div class="row mx-0">
                        <div class="bg-color-Rainbow" style="height: 140px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-auto"></div>
    </div>
</div>
@endsection
