@extends('layouts.app')

@section('content')
<div class="container-fluid p-0 bg-img overflow-y-auto">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="row justify-content-center">
                <h2 class="text-white text-center pt-5">Our Theme</h2>
                <hr class="border border-white opacity-100" style="width: 120px;">

                <h1 class="display-2 text-white text-center my-5">“Have Fun Saving”</h1>

                <p class="h4 text-white text-center mb-5" style="width: 280px">We hope that you can make a habit to save your money fun.</p>
            </div>
        </div>

        <div class="bg-color-Rainbow-opacity p-5" style="height: 80vh;">
            <div class="row justify-content-center mt-5">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="h4 text-white">You can continue to save your money on each device.</p>
                        </div>
                        <div class="col-md-7">
                            <img src="{{ asset('images/pc-sample.png') }}" alt="pc-sample" style="width: 380px" class="mx-auto d-block">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-auto align-self-end p-0">
                            <img src="{{ asset('images/tablet-sample.png') }}" alt="tablet-sample" style="width: 130px">
                            <img src="{{ asset('images/smartphone-sample.png') }}" alt="smartphone-sample" style="width: 70px" class="align-bottom ms-3">
                        </div>
                        <div class="col-md-auto align-self-end">
                            <p class="h1 text-white mx-3 d-inline-flex">Let's save money!!!</p>
                            <img src="{{ asset('images/pink_pig.png') }}" alt="pink_pig" style="width: 80px">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <a href="{{ route('register') }}" class="btn btn-main-reverse w-75 mx-auto my-5">
                            <span class="h4">Sign Up </span> for free
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row justify-content-center mt-5">
                <h2 class="text-white text-center mt-5">Our Service</h2>
                <hr class="border border-white opacity-100 mb-5" style="width: 120px;">

                <div class="card rounded-4 p-4 mb-5" style="background-color: rgba(217, 217, 217, 0.5)">
                    <div class="row">
                        <div class="col ps-4">
                            <div class="d-flex">
                                <img src="{{ asset('images/calendar-icon.png') }}" alt="calendar-icon" style="width: 45px" class="mb-3">
                                <h3 class="text-white mt-2 ms-3" style="text-shadow: 1px 1px 2px #343A40">Calendar</h3>
                            </div>
                            <div style="text-shadow: 1px 1px 2px #343A40">
                                <p class="text-white mb-0">You can handle your transaction and edit it easily.</p>
                                <p class="text-white mb-0">You can create your own wish.</p>
                                <p class="text-white mb-0">You can handle your transaction and edit it easily.</p>
                                <p class="text-white mb-0">You can create your own wish.</p>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{ asset('images/calender-sample.png') }}" alt="" style="width: 320px">
                        </div>
                    </div>
                </div>

                <div class="card rounded-4 p-4 mb-5" style="background-color: rgba(217, 217, 217, 0.5)">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('images/entry-sample.png') }}" alt="" style="width: 320px">
                        </div>
                        <div class="col">
                            <div class="d-flex">
                                <img src="{{ asset('images/entry-icon.png') }}" alt="calendar-icon" style="width: 45px" class="mb-3">
                                <h3 class="text-white mt-2 ms-3" style="text-shadow: 1px 1px 2px #343A40">Entry</h3>
                            </div>
                            <div style="text-shadow: 1px 1px 2px #343A40">
                                <p class="text-white mb-0">You can handle your transaction and edit it easily.</p>
                                <p class="text-white mb-0">You can create your own wish.</p>
                                <p class="text-white mb-0">You can handle your transaction and edit it easily.</p>
                                <p class="text-white mb-0">You can create your own wish.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card rounded-4 p-4 mb-5" style="background-color: rgba(217, 217, 217, 0.5)">
                    <div class="row">
                        <div class="col ps-4">
                            <div class="d-flex">
                                <img src="{{ asset('images/analysis-icon.png') }}" alt="calendar-icon" style="width: 45px" class="mb-3">
                                <h3 class="text-white mt-2 ms-3" style="text-shadow: 1px 1px 2px #343A40">Analysis</h3>
                            </div>
                            <div style="text-shadow: 1px 1px 2px #343A40">
                                <p class="text-white mb-0">You can handle your transaction and edit it easily.</p>
                                <p class="text-white mb-0">You can create your own wish.</p>
                                <p class="text-white mb-0">You can handle your transaction and edit it easily.</p>
                                <p class="text-white mb-0">You can create your own wish.</p>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{ asset('images/analysis-sample.png') }}" alt="" style="width: 320px">
                        </div>
                    </div>
                </div>

                <div class="card rounded-4 p-4 mb-5" style="background-color: rgba(217, 217, 217, 0.5)">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('images/account-sample.png') }}" alt="" style="width: 320px">
                        </div>
                        <div class="col">
                            <div class="d-flex">
                                <img src="{{ asset('images/account-icon.png') }}" alt="calendar-icon" style="width: 45px" class="mb-3">
                                <h3 class="text-white mt-2 ms-3" style="text-shadow: 1px 1px 2px #343A40">Account</h3>
                            </div>
                            <div style="text-shadow: 1px 1px 2px #343A40">
                                <p class="text-white mb-0">You can handle your transaction and edit it easily.</p>
                                <p class="text-white mb-0">You can create your own wish.</p>
                                <p class="text-white mb-0">You can handle your transaction and edit it easily.</p>
                                <p class="text-white mb-0">You can create your own wish.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <a href="{{ route('register') }}" class="btn btn-main w-75 mx-auto my-5">
                        <span class="h4">Sign Up </span> for free
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
