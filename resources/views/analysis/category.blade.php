@extends('layouts.app')
    
@section('content')
    <div class="container">
        <h2 class="h1 text-center fw-bold my-3">2024 Mar</h2>

        <div class="row mt-3">
            <div class="col-3 p-4">
                <div class="row mb-4" style="height: 200px">
                    <div class="col position-relative">
                        <div class="z-1 position-absolute top-50 start-50 translate-middle">
                            <h3 class="h5 fw-bold text-secondary">Expense</h3>
                            {{-- TODO: Total --}}
                            <h4 class="fw-bold text-danger">¥7,923</h4>  
                        </div>
                        <div class="z-0 position-absolute top-50 start-50 translate-middle">
                            <canvas id="expenseChart" width="200" height="200"></canvas>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <table class="table">
                        <tr>
                            <th class="h5">House</th>
                            <td class="text-end text-danger">¥-2,000</td>
                        </tr>
                        <tr>
                            <th>Percentage of Total</th>
                            <td class="text-end">50%</td>
                        </tr>
                        <tr>
                            <th>Number of Events</th>
                            <td class="text-end">5</td>
                        </tr>
                        <tr>
                            <th>Average of Events</th>
                            <td class="text-end">¥1,000</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col p-4">
                <div class="card">
                    <div class="card-header"  style="background-color: rgba(220, 53, 69, 0.5);">
                        <h6 class="m-0">House</h6>
                    </div>
                    <div class="card-body px-5">
                        <div class="row mt-3 mb-5" style="height: 300px">
                            <div class="col position-relative">
                                <div class="z-1 position-absolute top-50 start-50 translate-middle">
                                    <h3 class="h4 text-center fw-bold text-secondary">House</h3>
                                    {{-- TODO: Total --}}
                                    <h4 class="fw-bold text-danger">¥6,000</h4>  
                                </div>
                                <div class="z-0 position-absolute top-50 start-50 translate-middle">
                                    <canvas id="childChart"></canvas>
                                </div>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <tr>
                                        <th class="h5">House</th>
                                        <td class="text-end text-danger">¥-2,000</td>
                                    </tr>
                                    <tr>
                                        <th>Electricity (2)</th>
                                        <td class="text-end">¥1,000</td>
                                    </tr>
                                    <tr>
                                        <th>Electricity (2)</th>
                                        <td class="text-end">¥1,000</td>
                                    </tr>
                                    <tr>
                                        <th>Electricity (2)</th>
                                        <td class="text-end">¥1,000</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <h5 class="h4 ps-5">Electricity</h5>
                        <div>
                            <canvas id="childbarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/categorychart.js') }}"></script>
    
@endsection