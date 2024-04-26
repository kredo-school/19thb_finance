@extends('layouts.app')

@section('title', 'Premium')

{{--
<main class="py-4">
    @yield('components.header')
</main>
--}}

@section('content')
<div class="container-fluid position-relative m-0 p-0">
    <img src="images/bubble_backscreen.png" alt="bg_img_premium" class="w-100" style="height: 140px;">
    <p class="h2 text-warning fw-bold position-absolute top-50 start-50 translate-middle">premium</p>
</div>


<div class="col-md-4 d-flex align-items-stretch">
    <div class="card p-0">
        <div class="card-body border border-3 p-5">
                <div class="ta-center mt-50 ">
                    <a href="#" class="pay-border-btn w-50"><span class="pay__txt w-90">Payment Info</span></a>
                </div>
            <img src="images/pinky_pig.png" alt="money-juu pig-img" class="mx-auto d-block" style="width: 30%;">

            <div class="col-sm">
                <div class="form-box">
                    <p class="fs-5 fw-bold">Subscription Plan</p>
                    <div class="ms-3">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="Radio" id="Radios1" value="option1" checked>
                            <label for="exampleRadios1" class="form-check-label">Monthly Plan    <span>￥500 / Month</span></label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="Radio" id="Radios2" value="option2">
                            <label for="Radios2" class="form-check-label">Annual Plan<span>￥5,000 / Year</span></label>
                        </div>
                    </div>

                    <div class="col-10 my-4">
                        <label for="Input" class="form-label">Cardholder's Name</label>
                        <input type="name" class="form-control" id="name" placeholder="MONEY JUU" required>
                    </div>

                    <div class="col-10 my-4">
                        <label for="Input" class="form-label">Credit Card Number</label>
                        <input type="number" class="form-control" id="number" placeholder="123456789012" required>
                    </div>

                    <div class="col-10 my-4">
                        <label for="Input" class="form-label">Expiration Date</label>
                        <div class="row g-2">
                                <div class="col-5">
                                    <select class="form-select col-6" id="Select" required>
                                        <option selected>month</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>

                                <div class="col-5">
                                    <select class="form-select" id="Select" required>
                                        <option selected>year</option>
                                        <option value="1">2024</option>
                                        <option value="2">2025</option>
                                        <option value="3">2026</option>
                                        <option value="4">2027</option>
                                        <option value="5">2028</option>
                                        <option value="6">2029</option>
                                        <option value="7">2030</option>
                                        <option value="8">2031</option>
                                    </select>
                                </div>
                        </div>
                    </div>

                    <div class="col-5 text-start my-4">
                        <label for="number" class="form-label">Security Code</label>
                        <input type="number" class="form-control  col-4" aria-label="code" required>
                    </div>

                    <div>
                        <button class="btn btn-primary w-100 my-2 text-center" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--
<main class="py-4">
    @yield('footer')
</main>
--}}

@endsection
