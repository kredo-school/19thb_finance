<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PremiumController;


Route::get('/faq', function () {
    return view('contacts.faq');
});

Route::get('/inquiry', function () {
    return view('contacts.inquiry');
});

Route::get('/aboutUs', function () {
    return view('contacts.aboutUs');
});


# Premium
Route::get('/premium', function () {
    return view('premium');
});

Route::post('/update-payment', [PremiumController::class, 'update'])->name('update.payment');


# Privacy & Terms
Route::get('/privacyandterms', function () {
    return view('privacyandterms');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');