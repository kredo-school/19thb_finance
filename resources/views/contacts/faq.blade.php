@extends('layouts.app')

@section('title', "FAQ")

@section('content')
<div class="container-fluid position-relative m-0 p-0">
    <img src="images/bg_img_aboutUs_faq_inquiry.jpg" alt="background_FAQ" class="w-100" style="height: 140px;">

    <img src="images/balloon.png" alt="balloon" class="opacity-75 position-absolute top-50 end-0 translate-middle" style="height: 140px;">
    
    <img src="images/card.png" alt="card" class="z-0 position-absolute top-50 start-50 translate-middle" style="width: 160px; height: 130px;">

    <h2 class="color3 position-absolute bottom-0 start-50 translate-middle" style="letter-spacing: .2rem;">FAQ</h2>
</div>

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-auto position-relative">
            <div class="row mb-2">
                <a class="h4 fw-bold text-secondary btn border border-3 rounded-3 shadow mx-3 px-3 py-1" style="max-width: 150px;" href="#">{{ __('About Us') }}</a>
            </div>

            <div class="row mb-2">
                <p class="h5 text-secondary text-center border border-3 rounded-3 shadow bg-white bg-opacity-50 mx-3 px-3 py-1" style="letter-spacing: .1rem; max-width: 150px; border: solid 3px #F7A072 !important;">{{ __('FAQ') }}</p>
            </div>

            <div class="row mb-2">
                <a class="h4 fw-bold text-secondary btn border border-3 rounded-3 shadow mx-3 px-3 py-1" style="max-width: 150px;" href="#">{{ __('Inquiry Form') }}</a>
            </div>

            <div class="row mx-1 mb-2 position-absolute bottom-0 end-0">
                <img src="images/pink_pig.png" alt="pink_pig" class="opacity-75" style="max-width: 150px">
            </div>
        </div>
        
        <div class="col-md-auto d-flex align-items-stretch">
            <div class="mx-3 p-0">
                <div class="card card-body border border-3 rounded-3 px-5 py-3 mb-2 bg-color-Background" style="max-width: 500px;">
                    <div class="row">
                        <div class="col-sm-1 d-flex align-items-center p-0 faq">
                            <a data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                                <i class="fas fa-plus fa-xl color3 faq-item" data-tab="01"></i>
                            </a>
                        </div>
                        
                        <div class="col-sm-11">
                            <p class="fs-6 fw-semibold text-secondary mb-0 faq-title">
                                Q: What devices do I need to use this app?
                            </p>

                            <div class="collapse text-secondary mt-2 faq-box faq-box001" data-panel="01" id="collapseExample1">
                                This app is available for both desktop and mobile devices. It can be used on Windows, Mac, iOS, and Android devices.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-body border border-3 rounded-3 px-5 py-3 mb-2 bg-color-Background" style="max-width: 500px;">
                    <div class="row">
                        <div class="col-sm-1 d-flex align-items-center p-0 faq">
                            <a data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                                <i class="fas fa-plus fa-xl color3 faq-item" data-tab="02"></i>
                            </a>
                        </div>
                        
                        <div class="col-sm-11">
                            <p class="fs-6 fw-semibold text-secondary mb-0 faq-title">
                                Q: How much does it cost to use the app?
                            </p>

                            <div class="collapse text-secondary mt-2 faq-box faq-box002" data-panel="02" id="collapseExample2">
                                A: The app offers basic features for free. However, premium features or additional services may require a monthly or yearly subscription.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-body border border-3 rounded-3 px-5 py-3 mb-2 bg-color-Background" style="max-width: 500px;">
                    <div class="row">
                        <div class="col-sm-1 d-flex align-items-center p-0 faq">
                            <a data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                                <i class="fas fa-plus fa-xl color3 faq-item" data-tab="03"></i>
                            </a>
                        </div>
                        
                        <div class="col-sm-11">
                            <p class="fs-6 fw-semibold text-secondary mb-0 faq-title">
                                Q: How do I set budgets and categorize expenses?
                            </p>

                            <div class="collapse text-secondary mt-2 faq-box faq-box003" data-panel="03" id="collapseExample3">
                                A: You can set budgets and categorize expenses using the settings menu or buttons within the app interface.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-body border border-3 rounded-3 px-5 py-3 mb-2 bg-color-Background" style="max-width: 500px;">
                    <div class="row">
                        <div class="col-sm-1 d-flex align-items-center p-0 faq">
                            <a data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                                <i class="fas fa-plus fa-xl color3 faq-item" data-tab="04"></i>
                            </a>
                        </div>
                        
                        <div class="col-sm-11">
                            <p class="fs-6 fw-semibold text-secondary mb-0 faq-title">
                                Q: Is my app data backed up? What if I encounter a failure?
                            </p>

                            <div class="collapse text-secondary mt-2 faq-box faq-box004" data-panel="04" id="collapseExample4">
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
<script src="{{ asset('js/faq.js') }}"></script>
@endsection
