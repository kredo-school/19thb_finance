@extends('layouts.app')
    
@section('content')

<main class="row container mx-auto">
    <aside class="col-auto" style="min-height: calc(100vh - 160px); background-color: rgba(247, 160, 114, 0.2);">
        @include('components.sidebar')
    </aside>
    <article class="col mt-4">
        <div class="container">
            <h2 class="h1 text-center fw-bold mb-4">{{ date('Y') }} {{ substr(date('F'), 0, 3) }}</h2>
    
            <div class="row">
                <div class="col-lg-3 ps-4">
                    <div class="row mb-4" style="height: 200px">
                        <div class="col position-relative">
                            <div class="z-0 position-absolute top-50 start-50 translate-middle">
                                <h3 class="h5 text-center fw-bold text-secondary">Expense</h3>
                                <h4 class="text-center fw-bold color2">¥{{ number_format(floor($totalExpenseAmount)) }}</h4> 
                            </div>
                            <div class="z-1 position-absolute top-50 start-50 translate-middle">
                                <a href="{{ route('analysis.category') }}" class="text-decoration-none">
                                    <div>
                                        <canvas id="expenseChart" width="200" height="200"></canvas>
                                    </div>
                                </a>
                                <div id="expenseData"
                                    data-expenseLabels="{{ json_encode($expenseChartData['expenseLabels']) }}"
                                    data-expenseColors="{{ json_encode($expenseChartData['expenseColors']) }}"
                                    data-expenseAmounts="{{ json_encode($expenseChartData['expenseAmounts']) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Parent Category Data --}}
                    <div class="row">
                        <table class="table p-0">
                            @foreach ($parentCategories as $parentCategory)
                                <tr class=" align-middle">
                                    <td rowspan="2" class="text-center" style="background-color: #{{ $parentCategory['color_hex'] }}">
                                        <a href="{{ route('analysis.people.person', $parentCategory['id']) }}">
                                            <img src="{{ asset('images/category-icon/' . $parentCategory['icon_path'] . '.svg') }}" alt="{{ $parentCategory['icon_path'] }}" class="filter-bg-color" width="25px" height="25px">
                                        </a>
                                    </td>
                                    <th class="border-0 pb-0" style="background-color: #F7F3EB">
                                        <a href="{{ route('analysis.people.person', $parentCategory['id']) }}" class="text-dark">
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
                            @endforeach
                        </table>
                    </div>
                </div> 
                <div class="col-lg-9 ps-5 pe-0">
                    <div class="card mb-3 parentCategory">
                        <div class="card-header bg-color-Rainbow">
                            <h6 class="fw-bold mb-0 color-Background">People</h6>
                        </div>
                        <div class="card-body px-5">
                            <div class="row mt-3 mb-4" style="min-height: 250px">
                                <div class="col position-relative">
                                    <div class="z-0 position-absolute top-50 start-50 translate-middle">
                                        <h3 class="h4 text-center fw-bold text-secondary" style="width: 100px;">People</h3>
                                        <h4 class="fw-bold text-center color2">¥{{ number_format(floor($totalExpenseAmount)) }}</h4>  
                                    </div>
                                    <div class="z-1 position-absolute top-50 start-50 translate-middle">
                                        <canvas id="peopleChart" width="250" height="250"></canvas>
                                        <div class="peopleData"
                                            data-peopleLabels="{{ json_encode($peopleLabels) }}"
                                            data-peopleColors="{{ json_encode($peopleColors) }}"
                                            data-peopleAmounts="{{ json_encode($peopleAmounts) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ( $people_transactions->isNotEmpty() )
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th class="text-end">Person Total</th>
                                            <th class="small text-end">Percentage <br> of Expense Total</th>
                                            <th class="small text-end">Number <br> of Events</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($people_transactions as $person)
                                            <tr class="align-middle">
                                                <td class="text-center px-0">
                                                    <svg width="45" height="45" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M32.499 41.3908C39.5095 41.3908 45.1935 35.7069 45.1935 28.6954C45.1935 21.6859 39.5095 16 32.499 16C25.4876 16 19.8047 21.6859 19.8047 28.6954C19.8047 35.7069 25.4876 41.3908 32.499 41.3908Z" fill="{{ $person['color_hex'] }}"/>
                                                        <path d="M48.757 53.547C48.1903 50.152 45.3117 45.4592 43.2491 43.2622C42.6913 42.6677 41.7229 42.915 41.3825 43.1257C38.7947 44.7212 35.7569 45.6521 32.4995 45.6521C29.2421 45.6521 26.2043 44.7212 23.6165 43.1257C23.2763 42.915 22.3078 42.6677 21.7498 43.2622C19.6874 45.4592 16.8088 50.152 16.242 53.547C14.8493 61.9057 23.7788 64.9257 32.4996 64.9257C41.2203 64.9257 50.1498 61.9057 48.757 53.547Z" fill="{{ $person['color_hex'] }}"/>
                                                        <circle cx="32.5" cy="32.5" r="31" stroke="#D1D1D1" stroke-width="3"/>
                                                    </svg>
                                                </td>
                                                <th class="text-nowrap">
                                                    {{ $person['name']}}
                                                </th>
                                                <td class="text-end">¥{{ number_format(floor($person['total_amount'])) }}</td>
                                                <td class="fw-normal text-end">{{ floor($person['percentage_of_total']) }}%</td>
                                                <td class="fw-normal text-end">{{ $person['count'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mb-3">
                                    <canvas class="personChart" id="personChart" height="130px"></canvas>
                                    
                                    @foreach ($people_transactions as $person)
                                        <div class="personData"
                                            data-personName="{{ json_encode($person['name']) }}"
                                            data-personLabels="{{ json_encode($person['monthly_labels']) }}"
                                            data-personColors="{{ json_encode($person['color_hex']) }}"
                                            data-personAmounts="{{ json_encode($person['monthly_amounts']) }}">
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </article>
</main>
    
@endsection