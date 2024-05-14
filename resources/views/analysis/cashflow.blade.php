@extends('layouts.app')
    
@section('content')

<main class="row container mx-auto">
    <aside class="col-auto" style="min-height: calc(100vh - 160px); background-color: #FFE4D6;">
        @include('components.sidebar')
    </aside>
    <article class="col-9 mt-4">
        <div class="container">
            <h2 class="h1 text-center fw-bold">2024 Mar</h2>
    
            <div class="bg-white shadow rounded m-4 p-4">
                <canvas id="cashflowChart"></canvas>
            </div>
    
        </div>
    </article>
</main>

    <script src="{{ asset('js/analysis/cashflowchart.js') }}"></script>
    
@endsection