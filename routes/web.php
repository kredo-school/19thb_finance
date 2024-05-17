<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AnalysisController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ChildCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParentCategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PremiumController;
use App\Http\Controllers\WishlistsController;
use App\Http\Controllers\TransactionsController;

Auth::routes();


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

// contacts
Route::get('/aboutUs', [AboutUsController::class, 'create'])->name('aboutUs');
Route::get('/faq', [FaqController::class, 'create'])->name('faq');
Route::get('/inquiry', [ReportController::class, 'create'])->name('inquiry');
Route::post('/inquiry', [ReportController::class, 'store'])->name('inquiry.store');
Route::get('/report', [ReportController::class, 'index']);

Route::group(['middleware' => 'auth'], function() {
    // Category
    Route::get('/category/show', [ParentCategoryController::class, 'show'])->name('category.show');
    Route::get('/category/create', [ParentCategoryController::class, 'create'])->name('category.create');
    Route::post('category/parent/store', [ParentCategoryController::class, 'store'])->name('category.parent.store');
    Route::get('category/parent/{id}/edit', [ParentCategoryController::class, 'edit'])->name('category.parent.edit');
    Route::patch('category/parent/{id}/update', [ParentCategoryController::class, 'update'])->name('category.parent.update');
    Route::delete('category/parent/{id}/destroy', [ParentCategoryController::class, 'destroy'])->name('category.parent.destroy');
    Route::get('/category/{id}/child/show', [ChildCategoryController::class, 'show'])->name('category.child.show');
    Route::get('/category/{id}/child/create', [ChildCategoryController::class, 'create'])->name('category.child.create');
    Route::post('/category/{parent_category_id}/child/store', [ChildCategoryController::class, 'store'])->name('category.child.store');
    Route::get('/category/{parent_category_id}/child/{child_category_id}/edit', [ChildCategoryController::class, 'edit'])->name('category.child.edit');
    Route::patch('/category/{parent_category_id}/child/{child_category_id}/update', [ChildCategoryController::class, 'update'])->name('category.child.update');
    Route::delete('/category/{parent_category_id}/child/{child_category_id}/destroy', [ChildCategoryController::class, 'destroy'])->name('category.child.destroy');

    // Home
    Route::get('/home', [HomeController::class, 'index'])->name('calendars.home');

    // Wishlists 
    Route::get('/wishlists', [WishlistsController::class, 'show'])->name('calendars.wishlists.show');
    Route::get('/wishlists/new', [WishlistsController::class, 'new'])->name('calendars.wishlists.new');
    Route::get('/wishlists/edit', [WishlistsController::class, 'edit'])->name('calendars.wishlists.edit');

    // Transactions
    Route::get('/transactions/new', [TransactionsController::class, 'new'])->name('calendars.transactions.new');


    // Analysis
    Route::get('/analysis/summary', [AnalysisController::class, 'summary'])->name('analysis.summary');
    Route::get('/analysis/category', [AnalysisController::class, 'category'])->name('analysis.category');
    Route::get('/analysis/category/parent/{parent_category_id}', [AnalysisController::class, 'parent'])->name('analysis.category.parent');
    Route::get('/analysis/category/parent/{parent_category_id}/child/{child_category_id}', [AnalysisController::class, 'child'])->name('analysis.category.child');
    Route::get('/analysis/cashflow', [AnalysisController::class, 'cashflow'])->name('analysis.cashflow');
    Route::get('/analysis/people', [AnalysisController::class, 'people'])->name('analysis.people');
    Route::get('/analysis/people/{parent_category_id}/person/', [AnalysisController::class, 'person'])->name('analysis.people.person');
});

