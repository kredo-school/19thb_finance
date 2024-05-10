<?php

use App\Http\Controllers\ChildCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParentCategoryController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

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
});