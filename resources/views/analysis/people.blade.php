@extends('layouts.app')
    
@section('content')

<main class="row container mx-auto">
    <aside class="col-auto" style="min-height: calc(100vh - 160px); background-color: rgba(247, 160, 114, 0.2);">
        @include('components.sidebar')
    </aside>
    <article class="col-9 mt-4">
        <div class="container">
            <h2 class="h1 text-center fw-bold my-3">2024 Mar</h2>
    
            <div class="row mt-3">
                <div class="col-3 p-4">
                    <div class="row mb-4" style="height: 200px">
                        <div class="col position-relative">
                            <div class="z-0 position-absolute top-50 start-50 translate-middle">
                                <h3 class="h5 fw-bold text-secondary">Expense</h3>
                                {{-- TODO: Total --}}
                                <h4 class="fw-bold text-danger">¥7,923</h4>
                            </div>
                            <div class="z-1 position-absolute top-50 start-50 translate-middle">
                                <canvas id="expenseChart" width="200" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table">
                            <tr>
                                <th><i class="fa-solid fa-circle-user me-2"></i> Money Juo</th>
                                <td class="text-end">¥5,000</td>
                            </tr>
                            <tr>
                                <th><i class="fa-solid fa-circle-user me-2"></i> Money Juuco</th>
                                <td class="text-end">¥2,923</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-9 p-4">
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
                                            <th><span class="h5">House</span> : Total(3/1~3/31)</th>
                                            <td class="text-end text-danger">¥-2,000</td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa-solid fa-circle-user me-2"></i> Money Juo</th>
                                            <td class="text-end">¥1,000</td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa-solid fa-circle-user me-2"></i> Money Juuco</th>
                                            <td class="text-end">¥1,000</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <canvas id="childbarChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </article>
</main>

    <script src="{{ asset('js/analysis/peoplechart.js') }}"></script>
    
@endsection