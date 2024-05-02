@extends('layouts.app')
    
@section('content')
    <div class="container">
        <h2 class="h1 text-center fw-bold my-3">2024 Mar</h2>

        <div>
            <canvas id="cashflowChart"></canvas>
        </div>

    </div>

    <script src="{{ asset('js/cashflowchart.js') }}"></script>
    
@endsection