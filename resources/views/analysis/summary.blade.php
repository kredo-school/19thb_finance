@extends('layouts.app')
    
@section('content')

<main class="row container mx-auto">
    <aside class="col-auto" style="min-height: calc(100vh - 160px); background-color: rgba(247, 160, 114, 0.2);">
        @include('components.sidebar')
    </aside>
    <article class="col-9 mt-4">
        <div class="container">
            <h2 class="h1 text-center fw-bold my-3">{{ date('Y') }} {{ substr(date('F'), 0, 3) }}</h2>
    
            <div class="row justify-content-center mb-5">
                <div class="card bg-white shadow border-0 rounded-4 mt-3" style="width: 500px;">
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table class="table table-borderless text-center mb-0">
                                <thead>
                                    <th class="text-secondary bg-white">Income</th>
                                    <th class="bg-white"></th>
                                    <th class="text-secondary bg-white">Expense</th>
                                    <th class="bg-white"></th>
                                    <th class="text-secondary bg-white">Balance</th>
                                </thead>
                                <tbody>
                                    <td class="h3 bg-white" style="color: #227C9D;">¥{{ number_format(floor($totalIncomeAmount)) }}</td>
                                    <td class="h3 bg-white">-</td>
                                    <td class="h3 bg-white" style="color: #FE6D73;">¥{{ number_format(floor($totalExpenseAmount)) }}</td>
                                    <td class="h3 bg-white">=</td>
                                    <td class="h3 bg-white" style="color: {{ $totalIncomeAmount - $totalExpenseAmount > 0 ? '#227C9D' : '#FE6D73' }};">
                                        @if ($totalIncomeAmount - $totalExpenseAmount < 0)
                                            - ¥{{ number_format(floor(abs($totalIncomeAmount - $totalExpenseAmount))) }}
                                        @else
                                            ¥{{ number_format(floor($totalIncomeAmount - $totalExpenseAmount)) }}
                                        @endif
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="col-lg-6 mb-4 position-relative" style="height: 350px;">
                    <div class="z-0 position-absolute top-50 start-50 translate-middle">
                        <h3 class="h5 fw-bold text-secondary">Expense</h3>
                        <h4 class="fw-bold" style="color: #FE6D73;">¥{{ number_format(floor($totalExpenseAmount)) }}</h4>
                    </div>
                    <div class="z-1 position-absolute top-50 start-50 translate-middle">
                        <canvas id="expenseChart"></canvas>
                        <div id="expenseData"
                            data-expenseLabels="{{ json_encode($expenseChartData['expenseLabels']) }}"
                            data-expenseColors="{{ json_encode($expenseChartData['expenseColors']) }}"
                            data-expenseAmounts="{{ json_encode($expenseChartData['expenseAmounts']) }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="height: 350px;">
                    <div class="d-flex justify-content-between">
                        <h3 class="fw-bold">This Week</h3>
                        <p class="h3" style="color: #FE6D73;">¥{{ number_format(floor($weeklyChartData['totalWeeklyExpense'])) }}</p>                  
                    </div>
                    <div>
                        <canvas id="weeklyChart" class="bg-white shadow rounded p-3"></canvas>
                        <div id="weeklyData"
                            data-weeklyLabels="{{ json_encode($weeklyChartData['weeklyLabels']) }}"
                            data-weeklyAmounts="{{ json_encode($weeklyChartData['weeklyAmounts']) }}">
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </article>
</main>

    <script src="{{ asset('js/analysis/summarychart.js') }}"></script>
    
@endsection