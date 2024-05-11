@extends('layouts.app')

@section('title', 'Premium')

@section('content')
<div class="container-fluid position-relative m-0 p-0">
    <img src="images/bg_img_premium.jpg" alt="bg_img_premium" class="w-100" style="height: 140px;">
    <p id="premium-p" class="position-absolute top-50 start-50 translate-middle">premium</p>
</div>

<div class="container py-4">
    <div class="row justify-content-center ">
        <div class="col-md-auto d-flex align-items-stretch position-relative">
            <div class="col-md-auto position-absolute" style="left:-250px; height:100%">
                <div class="row py-2">
                    <h2 class="h4 fw-bold text-center rounded-3 mx-5 px-3 py-1 shadow p-3 mb-5" style="max-width: 200px;">Payment Info</h2>
                </div>

                <div class="row position-absolute end-0 px-4" style="bottom:0">
                    <img src="images/pinky_pig.png" alt="pink_pig" class="opacity-75" style="max-width: 150px">
                </div>
            </div>
            <form method="POST" action="{{ route('update.payment') }}"  enctype="multipart/form-data">
                @csrf {{-- security --}}

                <div class="card">
                    <div class="card-body border border-3 px-5 py-4" style="width: 400px;">
                    <div class="form-box">
                        <p class="fs-5 fw-bold">Subscription Plan</p>
                        <div class="ms-3">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="subscription" id="subscription" value="Monthly Plan 500/Month" checked>
                                <label for="option1" class="form-check-label">Monthly Plan <span>￥500 / Month</span></label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="subscription" id="subscription" value="Annual Plan 5,000/Year">
                                <label for="option2" class="form-check-label">Annual Plan <span>￥5,000 / Year</span></label>
                            </div>
                        </div>

                        <div class="col-10 my-4">
                            <label for="Input" class="form-label">Cardholder's Name</label>
                            <input type="name" class="form-control" name="cardholder_name" id="cardholder_name" required>
                        </div>

                        <div class="col-10 my-4">
                            <label for="Input" class="form-label">Credit Card Number</label>
                            <input type="number" class="form-control" name="card_number" id="card_number" required>
                        </div>

                        <div class="col-10 my-4">
                            <label for="Input" class="form-label">Expiration Date</label>
                            <div class="row g-2">
                                    <div class="col-5">
                                        <select class="form-select col-9" name="expire_month" id="expire_month" required>
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
                                        <select class="form-select" name="expire_year" id="expire_year" required>
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
                            <input type="number" class="form-control  col-4" name="security_code" id="security_code" aria-label="code" required>
                        </div>

                        <div>
                            <button class="btn bg-color4 text-white inner-button w-100 my-2 text-center" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
