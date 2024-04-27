<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/premium', function () {
    return view('premium');
});

Route::get('/cheatlogin', function () {
    return view('cheatlogin');
});

Route::get('/faq', function () {
    return view('contacts/faq');
});

Route::get('/privacyandterms', function () {
    return view('privacyandterms');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');