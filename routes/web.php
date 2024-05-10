<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WishlistsController;
use App\Http\Controllers\TransactionsController;

Auth::routes();

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
    return view('contacts.faq');
});

Route::get('/inquiry', function () {
    return view('contacts.inquiry');
});

Route::get('/aboutUs', function () {
    return view('contacts.aboutUs');
});

Route::get('/privacyandterms', function () {
    return view('privacyandterms');
});


// Home
Route::get('/home', [HomeController::class, 'index'])->name('calendars.home');

// Wishlists 
    // show
    Route::get('/wishlists', [WishlistsController::class, 'show'])->name('calendars.wishlists.show');
    // new
    Route::get('/wishlists/new', [WishlistsController::class, 'new'])->name('calendars.wishlists.new');
    // edit
    Route::get('/wishlists/edit', [WishlistsController::class, 'edit'])->name('calendars.wishlists.edit');


// Transactions
    // new
    Route::get('/transactions/new', [TransactionsController::class, 'new'])->name('calendars.transactions.new');

