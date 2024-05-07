@extends('layouts.app')

@section('title', "FAQ")

@section('content')
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}

{{-- <style>
    .toggle-icon {
        cursor: pointer;
    }
    .collapse.show + .toggle-icon .fa-plus {
        display: none;
    }
    .collapse + .toggle-icon .fa-minus {
        display: none;
    }
</style> --}}

<div class="container-fluid position-relative m-0 p-0">
    <img src="images/bg_img_aboutUs_faq_inquiry.jpg" alt="background_FAQ" class="w-100" style="height: 140px;">

    <img src="images/balloon.png" alt="balloon" class="opacity-75 position-absolute top-50 end-0 translate-middle" style="height: 140px;">
    
    <img src="images/card.png" alt="card" class="d-flex align-items-baseline z-0 position-absolute top-50 start-50 translate-middle" style="width: 160px; height: 130px;">

    <h2 class="fw-bold color3 position-absolute bottom-0 start-50 translate-middle" style="letter-spacing: .2rem;">FAQ</h2>
</div>

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-auto position-relative">
            <div class="row mb-2">
                <a class="h4 fw-bold btn border border-3 rounded-3 shadow mx-3 px-3 py-1" style="max-width: 150px;" href="#">{{ __('About Us') }}</a>
            </div>

            <div class="row mb-2">
                <p class="h5 text-center border border-3 rounded-3 shadow bg-white bg-opacity-50 mx-3 px-3 py-1" style="letter-spacing: .1rem; max-width: 150px;">{{ __('FAQ') }}</p>
            </div>

            <div class="row mb-2">
                <a class="h4 fw-bold btn border border-3 rounded-3 shadow mx-3 px-3 py-1" style="max-width: 150px;" href="#">{{ __('Inquiry Form') }}</a>
            </div>

            <div class="row position-absolute bottom-0 end-0">
                <img src="images/pink_pig.png" alt="pink_pig" class="opacity-75" style="max-width: 150px">
            </div>
        </div>
        
        <div class="col-md-auto d-flex align-items-stretch">
            <div class="card border-0 mx-3 p-0 bg-color-Background">
                <div class="card-body border border-3 rounded-3 px-5 py-3 mb-2 bg-color-Background" style="max-width: 500px;">
                    <div class="row">
                        <div class="col-md-1 d-flex align-items-center p-0">
                            <a data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                                <i class="fas fa-plus fa-xl color3"></i>
                            </a>
                        </div>
                        
                        <div class="col-md-11">
                            <p class="fs-6 fw-bold mb-0">
                                Q: What devices do I need to use this app?
                            </p>

                            <div class="collapse mt-2 show" id="collapseExample1">
                                This app is available for both desktop and mobile devices. It can be used on Windows, Mac, iOS, and Android devices.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body border border-3 rounded-3 px-5 py-3 mb-2 bg-color-Background" style="max-width: 500px;">
                    <div class="row">
                        <div class="col-md-1 d-flex align-items-center p-0">
                            <a data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                                <i class="fas fa-plus fa-xl color3"></i>
                            </a>
                        </div>
                        
                        <div class="col-md-11">
                            <p class="fs-6 fw-bold mb-0">
                                Q: How much does it cost to use the app?
                            </p>

                            <div class="collapse mt-2" id="collapseExample2">
                                A: The app offers basic features for free. However, premium features or additional services may require a monthly or yearly subscription.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body border border-3 rounded-3 px-5 py-3 mb-2 bg-color-Background" style="max-width: 500px;">
                    <div class="row">
                        <div class="col-md-1 d-flex align-items-center p-0">
                            <a data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                                <i class="fas fa-plus fa-xl color3"></i>
                            </a>
                        </div>
                        
                        <div class="col-md-11">
                            <p class="fs-6 fw-bold mb-0">
                                Q: How do I set budgets and categorize expenses?
                            </p>

                            <div class="collapse mt-2" id="collapseExample3">
                                A: You can set budgets and categorize expenses using the settings menu or buttons within the app interface.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body border border-3 rounded-3 px-5 py-3 mb-2 bg-color-Background" style="max-width: 500px;">
                    <div class="row">
                        <div class="col-md-1 d-flex align-items-center p-0">
                            <a data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                                <i class="fas fa-plus fa-xl color3"></i>
                            </a>
                        </div>
                        
                        <div class="col-md-11">
                            <p class="fs-6 fw-bold mb-0">
                                Q: Is my app data backed up? What if I encounter a failure?
                            </p>

                            <div class="collapse mt-2" id="collapseExample4">
                                Yes, your app data is regularly backed up. You can manually restore data from the app's settings menu. Alternatively, you can contact our support team for assistance.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-auto"></div>
    </div>
</div>
@endsection
