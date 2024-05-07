<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faq', function () {
    return view('contacts.faq');
});

Route::get('/inquiry', function () {
    return view('contacts.inquiry');
});

Route::get('/aboutUs', function () {
    return view('contacts.aboutUs');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
