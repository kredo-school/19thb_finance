@extends('layouts.app')
    
@section('content')


    <div class="container">
        <h2 class="h1 text-center fw-bold my-3">2024 Mar</h2>

        <div class="d-flex justify-content-center">
            <div class="card w-50 mt-3 bg-white shadow border-0 rounded-4">
                <div class="card-body p-2">
                    <table class="table table-borderless text-center mb-0">
                        <thead>
                            <th class="text-secondary bg-white">Income</th>
                            <th class="bg-white"></th>
                            <th class="text-secondary bg-white">Expense</th>
                            <th class="bg-white"></th>
                            <th class="text-secondary bg-white">Balance</th>
                        </thead>
                        <tbody>
                            <td class="h3 text-primary bg-white">¥10,000</td>
                            <td class="h3 bg-white">-</td>
                            <td class="h3 text-danger bg-white">¥7,923</td>
                            <td class="h3 bg-white">=</td>
                            <td class="h3 text-primary bg-white">¥2,077</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-4 p-4 me-5">
                <div>
                    <canvas id="expenseChart" width="600" height="400"></canvas>
                </div>
            </div>
            <div class="col p-4">
                <div class="row">
                    <div class="col">
                        <h3 class="fw-bold">This Week</h3>
                    </div>
                    <div class="col text-end">
                        <p class="h3" style="color: rgba(255, 99, 132, 1)">¥4,500</p>
                    </div>                    
                </div>
                <div>

                    <canvas id="weekChart" width="600" height="400"></canvas>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/analysischart.js') }}"></script>
    
@endsection