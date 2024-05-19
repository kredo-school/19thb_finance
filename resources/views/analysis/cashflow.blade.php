@extends('layouts.app')
    
@section('content')

<main class="row container mx-auto">
    <aside class="col-auto" style="min-height: calc(100vh - 160px); background-color: rgba(247, 160, 114, 0.2);">
        @include('components.sidebar')
    </aside>
    <article class="col mt-4">
        <div class="container">
            <h2 class="h1 text-center fw-bold">{{ date('Y') }} {{ substr(date('F'), 0, 3) }}</h2>
    
            <div class="bg-white shadow rounded m-4 p-4">
                <canvas id="cashflowChart"></canvas>
                <div  id="cashflowData"
                data-cashflowLabels="{{ json_encode($monthlyLabels) }}"
                data-cashflowIncome="{{ json_encode($monthlyIncomeTotals) }}"
                data-cashflowExpense="{{ json_encode($monthlyExpenseTotals) }}" 
                data-cashflowBalance="{{ json_encode($cashflowBalances) }}">
                </div>
            </div>
        </div>
    </article>
</main>
    
@endsection