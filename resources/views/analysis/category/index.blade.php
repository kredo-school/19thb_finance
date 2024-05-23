@extends('layouts.app')
    
@section('content')

<main class="row container mx-auto">
    <aside class="col-auto" style="min-height: calc(100vh - 160px); background-color: #FFE4D6">
        @include('components.sidebar')
    </aside>
    <article class="col mt-4">
        <div class="container">
            <h2 class="h1 text-center fw-bold mb-0">{{ date('Y') }} {{ substr(date('F'), 0, 3) }}</h2>
    
            <div class="row">
                <div class="col-lg-3 ps-5">
                    <div class="row mb-4">
                        <div class="col position-relative mt-5" style="height: 200px">
                            <div class="z-0 position-absolute top-50 start-50 translate-middle">
                                <h3 class="h5 text-center fw-bold text-secondary">Expense</h3>
                                <h4 class="fw-bold" style="color: #FE6D73;">¥{{ number_format(floor($totalExpenseAmount)) }}</h4>  
                            </div>
                            <div class="z-1 position-absolute top-50 start-50 translate-middle">
                                <canvas id="expenseChart" width="200" height="200"></canvas>
                                <div id="expenseData"
                                    data-expenseLabels="{{ json_encode($expenseChartData['expenseLabels']) }}"
                                    data-expenseColors="{{ json_encode($expenseChartData['expenseColors']) }}"
                                    data-expenseAmounts="{{ json_encode($expenseChartData['expenseAmounts']) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Parent Category Data --}}
                <div class="col-lg-8 px-5 ms-4 mt-4">
                    <table class="table p-0">
                        <thead>
                            <tr>
                                <th style="background-color: #F7F3EB"></th>
                                <th style="background-color: #F7F3EB"></th>
                                <th style="background-color: #F7F3EB"></th>
                                <th class="small" style="background-color: #F7F3EB">Percentage <br> of Total</th>
                                <th class="small" style="background-color: #F7F3EB">Number <br> of Events</th>
                                <th class="small" style="background-color: #F7F3EB">Average <br> of Events</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($parentCategories as $parentCategory)
                                <tr class="align-middle">
                                    <td class="text-center" style="background-color: #{{ $parentCategory['color_hex'] }}">
                                        <a href="{{ route('analysis.category.parent', $parentCategory['id']) }}">
                                            <img src="{{ asset('images/category-icon/' . $parentCategory['icon_path'] . '.svg') }}" alt="{{ $parentCategory['icon_path'] }}" class="filter-bg-color" width="25px" height="25px">
                                        </a>
                                    </td>
                                    <th style="background-color: #F7F3EB">
                                        <a href="{{ route('analysis.category.parent', $parentCategory['id']) }}" class="text-dark">
                                            {{ $parentCategory['name'] }}
                                        </a>
                                    </th>
                                    <td class="text-end" style="background-color: #F7F3EB">
                                        ¥{{ number_format(floor($parentCategory['total_amount'])) }}
                                    </td>
                                    <td class="text-end fw-medium" style="background-color: #F7F3EB">
                                        {{ floor($parentCategory['percentage_of_total']) }}%
                                    </td>
                                    <td class="text-end fw-medium" style="background-color: #F7F3EB">
                                        {{ $parentCategory['count'] }}
                                    </td>
                                    <td class="text-end fw-medium" style="background-color: #F7F3EB">
                                        ¥{{ number_format(floor($parentCategory['average_amount'])) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
</main>
    
@endsection