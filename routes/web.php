<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// contacts
Route::get('/aboutUs', [AboutUsController::class, 'create'])->name('aboutUs');
Route::get('/faq', [FaqController::class, 'create'])->name('faq');
Route::get('/inquiry', [ReportController::class, 'create'])->name('inquiry');
Route::post('/inquiry', [ReportController::class, 'store'])->name('inquiry.store');