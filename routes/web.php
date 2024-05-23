<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AnalysisController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ChildCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParentCategoryController;
use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PremiumController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\WishlistController;
use Psy\Command\EditCommand;

Route::get('/new', [TransactionController::class, 'new'])->name('new');
# Premium
Route::post('/update-payment', [PremiumController::class, 'update'])->name('update.payment');
Route::get('/register-premium', [PremiumController::class, 'show'])->name('register.premium');
Route::get('/premium', [PremiumController::class, 'show'])->name('premium');

# Privacy & Terms
Route::get('/privacyandterms', function () {
    return view('privacyandterms');
});

Auth::routes();

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/learn-more', [HomeController::class, 'learnMore'])->name('learnMore');

// contacts
Route::get('/aboutUs', [AboutUsController::class, 'create'])->name('aboutUs');
Route::get('/faq', [FaqController::class, 'create'])->name('faq');
Route::get('/inquiry', [ReportController::class, 'create'])->name('inquiry');
Route::post('/inquiry', [ReportController::class, 'store'])->name('inquiry.store');
Route::get('/report', [ReportController::class, 'index']);
Route::get('/report/show/{report}', [ReportController::class, 'show'])->name('report.show');
Route::get('/report/{report}/edit', [ReportController::class, 'edit'])->name('report.edit');
Route::patch('/report/{report}', [ReportController::class, 'update'])->name('report.update');

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

    // ItemLists
    Route::post('/item/store', [ItemController::class, 'store'])->name('item.store');
    Route::patch('/item/{id}/check', [ItemController::class, 'updateChecked'])->name('item.updateChecked');
    Route::delete('/item/{id}/destroy', [ItemController::class, 'destroy'])->name('item.destroy');

    // Wishlists
    Route::get('/wishlists/new', [WishlistController::class, 'create'])->name('calendars.wishlists.new');
    Route::post('/wishlists/new', [WishlistController::class, 'store'])->name('calendars.wishlists.store');
    Route::get('/wishlists', [WishlistController::class, 'index'])->name('calendars.wishlists.show');
    // Route::get('/wishlists/{wishlist}', [WishlistController::class, 'show'])->name('calendars.wishlists.show');
    Route::get('/wishlists/edit', [WishlistController::class, 'edit'])->name('calendars.wishlists.edit');

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

    // Profile
    Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // People
    Route::get('/people/show', [PeopleController::class, 'show'])->name('people.show');
    Route::post('people/store', [PeopleController::class, 'store'])->name('people.store');
    Route::get('/people/edit/{id}', [PeopleController::class, 'getPeopleById']);
    Route::patch('people/update/{id}', [PeopleController::class, 'update'])->name('people.update');
    Route::delete('people/destroy/{id}', [PeopleController::class, 'destroy'])->name('people.destroy');
});
