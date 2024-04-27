<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/analysis/summary', function () {
    return view('analysis.summary');
});

Route::get('/analysis/category', function () {
    return view('analysis.category');
});

Route::get('/analysis/cashflow', function () {
    return view('analysis.cashflow');
});

Route::get('/analysis/people', function () {
    return view('analysis.people');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
