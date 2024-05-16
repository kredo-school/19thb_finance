@extends('layouts.app')
    
@section('content')

<main class="row container mx-auto">
    <aside class="col-auto" style="min-height: calc(100vh - 160px); background-color: rgba(247, 160, 114, 0.2);">
        @include('components.sidebar')
    </aside>
    <article class="col mt-4">
        <div class="container">
            <h2 class="h1 text-center fw-bold mb-0">{{ date('Y') }} {{ substr(date('F'), 0, 3) }}</h2>
    
            <div class="row">
                <div class="col-3 ps-5">
                    <div class="row mb-4">
                        <div class="col position-relative mt-5" style="height: 200px">
                            <div class="z-0 position-absolute top-50 start-50 translate-middle">
                                <h3 class="h5 fw-bold text-secondary">Expense</h3>
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
                    {{-- Parent Category Detail --}}
                    <div class="row">
                        @foreach ($parentCategories as $parentCategory)
                            @if ($parentCategory['id'] == $parent_category_id)
                                <table class="table p-0 mb-3">
                                    <tr class="align-middle">
                                        <td style="background-color: #F7F3EB">
                                            <img src="{{ asset('images/category-icon/'. $parentCategory['icon_path'] . '.svg') }}" alt="{{ $parentCategory['icon_path'] }}" width="25px" height="25px" class="float-start ms-1 filter-{{ $parentCategory['color_hex'] }}">
                                        </td>
                                        <th class="h5 fw-bold" style="background-color: #F7F3EB">
                                            {{ $parentCategory['name'] }}
                                        </th>
                                        <td class="text-end" style="color: #{{ $parentCategory['color_hex'] }}; background-color: #F7F3EB">
                                            ¥{{ number_format(floor($parentCategory['total_amount'])) }}
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <th colspan="2" class="small" style="background-color: #F7F3EB">Percentage of Total</th>
                                        <td class="text-end fw-medium" style="background-color: #F7F3EB">
                                            {{ floor($parentCategory['percentage_of_total']) }}%
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <th colspan="2" class="small" style="background-color: #F7F3EB">Number of Events</th>
                                        <td class="text-end fw-medium" style="background-color: #F7F3EB">
                                            {{ $parentCategory['count'] }}
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <th colspan="2" class="small" style="background-color: #F7F3EB">Average of Events</th>
                                        <td class="text-end fw-medium" style="background-color: #F7F3EB">
                                            ¥{{ number_format(floor($parentCategory['average_amount'])) }}
                                        </td>
                                    </tr>
                                </table>
                            @endif
                        @endforeach
                    </div>
                    {{-- Parent Category Data --}}
                    <div class="row">
                        <table class="table p-0">
                            @foreach ($parentCategories as $parentCategory)
                                @if ($parentCategory['id'] != $parent_category_id)
                                    <tr class=" align-middle">
                                        <td rowspan="2" class="text-center" style="background-color: #{{ $parentCategory['color_hex'] }}">
                                            <a href="{{ route('analysis.category.parent', $parentCategory['id']) }}">
                                                <img src="{{ asset('images/category-icon/' . $parentCategory['icon_path'] . '.svg') }}" alt="{{ $parentCategory['icon_path'] }}" class="filter-bg-color" width="25px" height="25px">
                                            </a>
                                        </td>
                                        <th class="border-0 pb-0" style="background-color: #F7F3EB">
                                            <a href="{{ route('analysis.category.parent', $parentCategory['id']) }}" class="text-dark">
                                                {{ $parentCategory['name'] }}
                                            </a>
                                        </th>
                                        <td class="text-end border-0 pb-0" style="background-color: #F7F3EB">
                                            ¥{{ number_format(floor($parentCategory['total_amount'])) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #F7F3EB"></td>
                                        <td class="fw-light text-secondary text-end py-0" style="background-color: #F7F3EB; font-size: x-small;">{{ floor($parentCategory['percentage_of_total']) }}%</td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="col-9 p-5">
                    @foreach ($parentCategories as $parentCategory)
                        @if ($parentCategory['id'] == $parent_category_id)
                            <div class="card mb-3">
                                <div class="card-header" style="background-color: #{{ $parentCategory['color_hex'] }};" id="cardHeader">
                                    <img src="{{ asset('images/category-icon/'. $parentCategory['icon_path'] . '.svg') }}" alt="{{ $parentCategory['icon_path'] }}" width="18px" height="18px" class="float-start me-1 filter-bg-color">
                                    <h6 class="fw-bold mb-0 color-Background">{{ $parentCategory['name'] }}</h6>
                                </div>
                                <div class="card-body px-5">
                                    <div class="row mt-3 mb-4" style="height: 250px">
                                        <div class="col position-relative">
                                            <div class="z-0 position-absolute top-50 start-50 translate-middle">
                                                @foreach ($parentCategory['childCategories'] as $childCategory)
                                                    @if ($childCategory['id'] == $child_category_id)
                                                        <h3 class="h5 text-center fw-bold text-secondary" style="width: 100px;">{{ $childCategory['name'] }}</h3>
                                                        <h4 class="fw-bold text-center" style="color: #FE6D73;">¥{{ number_format(floor($childCategory['total_amount'])) }}</h4>
                                                    @endif
                                                @endforeach 
                                            </div>
                                            <div class="z-1 position-absolute top-50 start-50 translate-middle">
                                                <canvas id="childChart_{{ $loop->index }}" width="250" height="250"></canvas>
                                                <div class="childData"
                                                    data-childLabels="{{ json_encode($parentCategory['childLabels']) }}"
                                                    data-childColors="{{ json_encode('#' . $parentCategory['color_hex']) }}"
                                                    data-childAmounts="{{ json_encode($parentCategory['childAmounts']) }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <table class="table">
                                                <tr class="align-middle">
                                                    <th class="h5 fw-bold">
                                                        <a href="{{ route('analysis.category.parent', $parentCategory['id']) }}" class="text-dark">
                                                            <img src="{{ asset('images/category-icon/'. $parentCategory['icon_path'] . '.svg') }}" alt="{{ $parentCategory['icon_path'] }}" width="25px" height="25px" class="float-start me-2 filter-{{ $parentCategory['color_hex'] }}">
                                                            {{ $parentCategory['name'] }}
                                                        </a>
                                                    </th>
                                                    <td class="text-end">¥{{ number_format(floor($parentCategory['total_amount'])) }}</td>
                                                </tr>
                                                @foreach ($parentCategory['childCategories'] as $childCategory)
                                                    <tr class="align-middle">
                                                        <th class="border-0 pb-0">
                                                            <a href="{{ route('analysis.category.child', [$parentCategory['id'], $childCategory['id']]) }}" class="btn fw-bold border-0 text-dark p-0 {{ Request::segment(6) == $childCategory['id'] ? 'disabled' : 'text-decoration-underline' }}">
                                                                {{ $childCategory['name']}} &nbsp; ( {{$childCategory['count']}} ) 
                                                            </a>
                                                        </th>
                                                        <td class="text-end border-0 pb-0" style="color: {{ Request::segment(6) == $childCategory['id'] ? '#FE6D73' : '' }};">¥{{ number_format(floor($childCategory['total_amount'])) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td class="fw-light text-secondary text-end py-0" style="font-size: x-small;">{{ floor($childCategory['percentage_of_total']) }}%</td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                    @foreach ($parentCategory['childCategories'] as $childCategory)
                                        @if ($childCategory['id'] == $child_category_id)
                                            <div class="mb-3">
                                                <h5 class="h4 ps-5">{{ $childCategory['name'] }}</h5>
                                                <canvas id="childBarChart_{{ $loop->index }}" height="130px"></canvas>
                                                <div class="childBarData"
                                                    data-childBarLabels="{{ json_encode($childCategory['monthly_labels']) }}"
                                                    data-childBarColors="{{ json_encode('#' . $parentCategory['color_hex']) }}"
                                                    data-childBarAmounts="{{ json_encode($childCategory['monthly_amounts']) }}">
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </article>
</main>

    <script src="{{ asset('js/analysis/categorychart.js') }}"></script>
    
@endsection