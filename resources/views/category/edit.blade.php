@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8 m-3">
            <h3 class="text-center">Category</h3>
            <div class="bg-color-Rainbow mx-auto mb-2" style="width: 50px; height: 2px;"></div>
            
            {{-- Show Category --}}
            <div class="row justify-content-center">
                <div class="card p-4 mb-4 border-0 bg-color-Background">
                    <ul class="nav nav-underline justify-content-center mb-3 tab__menu">
                        <li class="nav-item px-3">
                            <button type="button" class="nav-link text-secondary tab__menu-item active" id="expense">expense</button>
                        </li>
                        <div class="vr"></div>
                        <li class="nav-item px-3">
                            <button type="button" class="nav-link text-secondary tab__menu-item" id="income">income</button>
                        </li>
                    </ul>
                    {{-- Show Expense Category --}}
                    <div class="expense" id="expense_categories">
                        {{-- Parent Category --}}
                        <div class="row row-cols-3 bg-light shadow rounded-3 p-4 parent_categories">
                            <div class="col my-2">
                                <button type="button" class="btn btn-lg text-danger px-3 parent_category text-truncate active" data-tab="11">
                                    <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                    Meal
                                </button>
                            </div>
                            <div class="col my-2">
                                <button type="button" class="btn btn-lg text-info px-3 parent_category text-truncate" data-tab="12">
                                    <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                    Daily
                                </button>
                            </div>
                            <div class="col my-2">
                                <button type="button" class="btn btn-lg text-secondary px-3 parent_category text-truncate" data-tab="13">
                                    <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                    Close
                                </button>
                            </div>
                            <div class="col my-2">
                                <button type="button" class="btn btn-lg text-success px-3 parent_category text-truncate" data-tab="14">
                                    <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                    Beauty
                                </button>
                            </div>
                            <div class="col my-2">
                                <button type="button" class="btn btn-lg text-warning px-3 parent_category text-truncate" data-tab="15">
                                    <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                    Hang out
                                </button>
                            </div>
                        </div>
                        {{-- Child Category --}}
                        <div class="row justify-content-center mt-4 child_categories">
                            <div class="card p-4 shadow border-0 rounded-3 child_category" data-panel="11">
                                <div class="d-flex justify-content-between mx-2 mb-2">
                                    <button type="button" class="btn btn-lg text-danger px-3 my-auto ms-2" style="text-decoration: underline; text-underline-offset: 8px;" id="editParentButton">
                                        <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                        <span class="h5">Meal</span>
                                    </button>
                                    <button class="btn my-auto" id="addChildButton">
                                        <i class="fa-solid fa-circle-plus fs-2" style="color: #DF5656;"></i>                         
                                    </button>
                                </div>
                                <div class="row row-cols-3 px-5">
                                    <div class="col">
                                        <button class="btn btn-lg my-3 px-3" style="text-decoration: underline; text-underline-offset: 8px;" id="editChildButton">
                                            <span class="h5">cafe</span>
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button class="btn my-3 text-decoration-underline" style="text-underline-offset: 8px;">
                                            <span class="h5">lunch</span>
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button class="btn my-3 text-decoration-underline" style="text-underline-offset: 8px;">
                                            <span class="h5">restaurant</span>
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button class="btn my-3 text-decoration-underline" style="text-underline-offset: 8px;">
                                            <span class="h5">snack</span>
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button class="btn my-3 text-decoration-underline" style="text-underline-offset: 8px;">
                                            <span class="h5">dinner</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card px-5 py-4 shadow border-0 d-none child_category d-none" data-panel="12">
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="h5 text-info my-auto text-decoration-underline" style="text-underline-offset: 8px; color: #0FA3B1;">
                                        <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                        Daily
                                    </p>
                                    <button class="btn my-auto">
                                        <i class="fa-solid fa-circle-plus fs-2" style="color: #0FA3B1;"></i>                                                 
                                    </button>
                                </div>
                                <div class="row row-cols-3 p-4">
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">cafe</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">lunch</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">restaurant</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">snack</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">dinnaer</div>
                                </div>
                            </div>
                            <div class="card px-5 py-4 shadow border-0 d-none child_category d-none" data-panel="13">
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="h5 text-info my-auto text-decoration-underline" style="text-underline-offset: 8px; color: #0FA3B1;">
                                        <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                        Close
                                    </p>
                                    <button class="btn my-auto">
                                        <i class="fa-solid fa-circle-plus fs-2" style="color: #0FA3B1;"></i>                                                 
                                    </button>
                                </div>
                                <div class="row row-cols-3 p-4">
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">cafe</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">lunch</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">restaurant</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">snack</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">dinnaer</div>
                                </div>
                            </div>
                            <div class="card px-5 py-4 shadow border-0 d-none child_category d-none" data-panel="14">
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="h5 text-info my-auto text-decoration-underline" style="text-underline-offset: 8px; color: #0FA3B1;">
                                        <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                        Beauty
                                    </p>
                                    <button class="btn my-auto">
                                        <i class="fa-solid fa-circle-plus fs-2" style="color: #0FA3B1;"></i>                                                 
                                    </button>
                                </div>
                                <div class="row row-cols-3 p-4">
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">cafe</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">lunch</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">restaurant</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">snack</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">dinnaer</div>
                                </div>
                            </div>
                            <div class="card px-5 py-4 shadow border-0 d-none child_category d-none" data-panel="15">
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="h5 text-info my-auto text-decoration-underline" style="text-underline-offset: 8px; color: #0FA3B1;">
                                        <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                        Hang out
                                    </p>
                                    <button class="btn my-auto">
                                        <i class="fa-solid fa-circle-plus fs-2" style="color: #0FA3B1;"></i>                                                 
                                    </button>
                                </div>
                                <div class="row row-cols-3 p-4">
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">cafe</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">lunch</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">restaurant</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">snack</div>
                                    <div class="col h5 mb-4 text-decoration-underline" style="text-underline-offset: 8px;">dinnaer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Show Income Category --}}
                    <div class="income" id="income_categories" style="display: none;">
                        <div class="row row-cols-3 bg-light shadow rounded-3 p-4">
                            <div class="col my-2">
                                <button type="button" class="btn btn-lg px-3" style="color: #0FA3B1" id="editIncomeButton">
                                    <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                    Income
                                </button>
                            </div>
                            <div class="col my-2">
                                <button type="button" class="btn btn-lg px-3" style="color: #0FA3B1">
                                    <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                    Income
                                </button>
                            </div>
                            <div class="col my-2">
                                <button type="button" class="btn btn-lg px-3" style="color: #0FA3B1">
                                    <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                    Income
                                </button>
                            </div>
                            <div class="col my-2">
                                <button type="button" class="btn btn-lg px-3" style="color: #0FA3B1">
                                    <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                    Income
                                </button>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-8 m-3">
            <div id="addCategoryButton">
                <div class="row justify-content-center px-5">
                    <button type="button" id="addButton" class="btn rounded-pill text-white fw-bold w-100 mb-1 bg-color4">
                        <i class="fa-solid fa-circle-plus me-1"></i> Add Category
                    </button>
                    <p class="small m-0 text-center">you can make your own original category.</p>
                    <p class="small text-center">you can also customize default categories.</p>
                </div>
            </div>

            {{-- Add Category --}}
            <div id="addCategory" style="display: none" class="my-3 add-items">
                <div class="card p-5 shadow border-0">
                    {{-- Add category --}}
                    <form action="#" method="post">
                        @csrf

                        <ul class="nav nav-underline justify-content-center mb-4 tab__menu">
                            <li class="nav-item px-3">
                                <input type="radio" value="expense" name="category_type" id="type_expense" class="btn-check" checked>
                                <label for="type_expense" class="btn nav-link rounded-0 text-secondary">expense</label>
                            </li>
                            <div class="vr"></div>
                            <li class="nav-item px-3">
                                <input type="radio" value="income" name="category_type" id="type_income" class="btn-check">
                                <label for="type_income" class="btn nav-link rounded-0 text-secondary">income</label>
                            </li>
                        </ul>

                        <div class="row mb-4">
                            <div class="col text-end mt-2">
                            </div>
                            <div class="col text-center">
                                <input type="text" class="fs-5 text-center border-0 border-bottom border-dark bg-light py-2" id="name" placeholder="Name (Parent)" value="">
                            </div>
                            <div class="col"></div>
                        </div>
                        
                        <div class="row gx-5 mb-4">
                            {{-- Icon Color --}}
                            <div class="col ps-4">
                                <div class="row row-cols-4 gx-1">
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#2FCC71" value="#2FCC71" name="category-color">
                                        <label class="btn p-1" for="#2FCC71">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#2FCC71"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#B8E894" value="#B8E894" name="category-color">
                                        <label class="btn p-1" for="#B8E894">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#B8E894"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#FFE9A7" value="#FFE9A7" name="category-color">
                                        <label class="btn p-1" for="#FFE9A7">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FFE9A7"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#FECA57" value="#FECA57" name="category-color">
                                        <label class="btn p-1" for="#FECA57">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FECA57"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#FFAA3F" value="#FFAA3F" name="category-color">
                                        <label class="btn p-1" for="#FFAA3F">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FFAA3F"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#FF7F50" value="#FF7F50" name="category-color">
                                        <label class="btn p-1" for="#FF7F50">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FF7F50"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#FF3F34" value="#FF3F34" name="category-color">
                                        <label class="btn p-1" for="#FF3F34">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FF3F34"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#FD79A8" value="#FD79A8" name="category-color">
                                        <label class="btn p-1" for="#FD79A8">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FD79A8"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#F8A5C2" value="#F8A5C2" name="category-color">
                                        <label class="btn p-1" for="#F8A5C2">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#F8A5C2"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#FF9FF3" value="#FF9FF3" name="category-color">
                                        <label class="btn p-1" for="#FF9FF3">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FF9FF3"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#D980FA" value="#D980FA" name="category-color">
                                        <label class="btn p-1" for="#D980FA">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#D980FA"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#6C5CE7" value="#6C5CE7" name="category-color">
                                        <label class="btn p-1" for="#6C5CE7">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#6C5CE7"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#0652DD" value="#0652DD" name="category-color">
                                        <label class="btn p-1" for="#0652DD">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#0652DD"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#2E86DE" value="#2E86DE" name="category-color">
                                        <label class="btn p-1" for="#2E86DE">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#2E86DE"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#54A0FF" value="#54A0FF" name="category-color">
                                        <label class="btn p-1" for="#54A0FF">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#54A0FF"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#48DBFB" value="#48DBFB" name="category-color">
                                        <label class="btn p-1" for="#48DBFB">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#48DBFB"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#C8D6E5" value="#C8D6E5" name="category-color">
                                        <label class="btn p-1" for="#C8D6E5">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#C8D6E5"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#7F8C8D" value="#7F8C8D" name="category-color">
                                        <label class="btn p-1" for="#7F8C8D">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#7F8C8D"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#1E3799" value="#1E3799" name="category-color">
                                        <label class="btn p-1" for="#1E3799">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#1E3799"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#474787" value="#474787" name="category-color">
                                        <label class="btn p-1" for="#474787">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#474787"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#833471" value="#833471" name="category-color">
                                        <label class="btn p-1" for="#833471">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#833471"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#C0392B" value="#C0392B" name="category-color">
                                        <label class="btn p-1" for="#C0392B">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#C0392B"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#B71540" value="#B71540" name="category-color">
                                        <label class="btn p-1" for="#B71540">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#B71540"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="#218C74" value="#218C74" name="category-color">
                                        <label class="btn p-1" for="#218C74">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#218C74"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- Icon Image --}}
                            <div class="col">
                                <div class="row row-cols-4 gx-1">
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="meal" value="meal" name="category-icon">
                                        <label class="btn p-1" for="meal">
                                            <img src="{{ asset('images/category-icon/meal.svg') }}" alt="meal" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="meal2" value="meal2" name="category-icon">
                                        <label class="btn p-1" for="meal2">
                                            <img src="{{ asset('images/category-icon/meal2.svg') }}" alt="meal2" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="daily" value="daily" name="category-icon">
                                        <label class="btn p-1" for="daily">
                                            <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="daily2" value="daily2" name="category-icon">
                                        <label class="btn p-1" for="daily">
                                            <img src="{{ asset('images/category-icon/daily2.svg') }}" alt="daily2" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="close" value="close" name="category-icon">
                                        <label class="btn p-1" for="close">
                                            <img src="{{ asset('images/category-icon/close.svg') }}" alt="close" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="beauty" value="beauty" name="category-icon">
                                        <label class="btn p-1" for="beauty">
                                            <img src="{{ asset('images/category-icon/beauty.svg') }}" alt="beauty" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="hang_out" value="hang_out" name="category-icon">
                                        <label class="btn p-1" for="hang_out">
                                            <img src="{{ asset('images/category-icon/hang_out.svg') }}" alt="hang_out" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="rent" value="rent" name="category-icon">
                                        <label class="btn p-1" for="rent">
                                            <img src="{{ asset('images/category-icon/rent.svg') }}" alt="rent" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="utilities" value="utilities" name="category-icon">
                                        <label class="btn p-1" for="utilities">
                                            <img src="{{ asset('images/category-icon/utilities.svg') }}" alt="utilities" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="utilities2" value="utilities2" name="category-icon">
                                        <label class="btn p-1" for="utilities2">
                                            <img src="{{ asset('images/category-icon/utilities2.svg') }}" alt="utilities2" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="data" value="data" name="category-icon">
                                        <label class="btn p-1" for="data">
                                            <img src="{{ asset('images/category-icon/data.svg') }}" alt="data" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="transportation" value="transportation" name="category-icon">
                                        <label class="btn p-1" for="transportation">
                                            <img src="{{ asset('images/category-icon/transportation.svg') }}" alt="transportation" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="education" value="education" name="category-icon">
                                        <label class="btn p-1" for="education">
                                            <img src="{{ asset('images/category-icon/education.svg') }}" alt="education" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="medical" value="medical" name="category-icon">
                                        <label class="btn p-1" for="medical">
                                            <img src="{{ asset('images/category-icon/medical.svg') }}" alt="medical" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="grocery" value="grocery" name="category-icon">
                                        <label class="btn p-1" for="grocery">
                                            <img src="{{ asset('images/category-icon/grocery.svg') }}" alt="grocery" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="investment" value="investment" name="category-icon">
                                        <label class="btn p-1" for="investment">
                                            <img src="{{ asset('images/category-icon/investment.svg') }}" alt="investment" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income1" value="income1" name="category-icon">
                                        <label class="btn p-1" for="income1">
                                            <img src="{{ asset('images/category-icon/income1.svg') }}" alt="income1" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income2" value="income2" name="category-icon">
                                        <label class="btn p-1" for="income2">
                                            <img src="{{ asset('images/category-icon/income2.svg') }}" alt="income2" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income3" value="income3" name="category-icon">
                                        <label class="btn p-1" for="income3">
                                            <img src="{{ asset('images/category-icon/income3.svg') }}" alt="income3" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income4" value="income4" name="category-icon">
                                        <label class="btn p-1" for="income4">
                                            <img src="{{ asset('images/category-icon/income4.svg') }}" alt="income4" width="33px">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <button type="submit" class="btn rounded-pill text-white fw-bold w-100 bg-color4">Save</button>
                    </form>
                </div>
            </div>

            {{-- Edit Parent Category (expense) --}}
            <div id="editParentCategory" style="display: none" class="my-3 edit-items expense-items">
                <div class="card p-5 shadow border-0">
                    <form action="#" method="post">
                        @csrf

                        <ul class="nav nav-underline justify-content-center mb-4 tab__menu">
                            <li class="nav-item px-3">
                                <input type="radio" value="expense" name="category_type" id="type_expense" class="btn-check" checked>
                                <label for="type_expense" class="btn nav-link rounded-0 text-secondary">expense</label>
                            </li>
                            <div class="vr"></div>
                            <li class="nav-item px-3">
                                <input type="radio" value="income" name="category_type" id="type_income" class="btn-check" disabled>
                                <label for="type_income" class="btn nav-link rounded-0 text-secondary">income</label>
                            </li>
                        </ul>

                        <div class="row mb-4">
                            <div class="col text-end mt-2">
                            </div>
                            <div class="col text-center">
                                <input type="text" class="fs-5 text-center border-0 border-bottom border-dark bg-light py-2" id="name" placeholder="Parent Category" value="Meal">
                            </div>
                            <div class="col text-end mt-2">
                                <button class="btn p-0">
                                    <i class="fa-solid fa-trash-can fs-4" style="color: #DF5656;"></i>                 
                                </button>
                            </div>
                        </div>
                        
                        <div class="row gx-5 mb-4">
                            {{-- Icon Color --}}
                            <div class="col ps-4">
                                <div class="row row-cols-4 gx-1">
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#2FCC71" value="#2FCC71" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#2FCC71">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#2FCC71"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#B8E894" value="#B8E894" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#B8E894">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#B8E894"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#FFE9A7" value="#FFE9A7" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#FFE9A7">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FFE9A7"/>
                                            </svg>
                                        </label>
                                    </div>                                        
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#FECA57" value="#FECA57" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#FECA57">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FECA57"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#FFAA3F" value="#FFAA3F" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#FFAA3F">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FFAA3F"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#FF7F50" value="#FF7F50" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#FF7F50">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FF7F50"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#FF3F34" value="#FF3F34" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#FF3F34">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FF3F34"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#FD79A8" value="#FD79A8" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#FD79A8">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FD79A8"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#F8A5C2" value="#F8A5C2" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#F8A5C2">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#F8A5C2"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#FF9FF3" value="#FF9FF3" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#FF9FF3">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FF9FF3"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#D980FA" value="#D980FA" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#D980FA">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#D980FA"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#6C5CE7" value="#6C5CE7" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#6C5CE7">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#6C5CE7"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#0652DD" value="#0652DD" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#0652DD">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#0652DD"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#2E86DE" value="#2E86DE" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#2E86DE">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#2E86DE"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#54A0FF" value="#54A0FF" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#54A0FF">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#54A0FF"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#48DBFB" value="#48DBFB" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#48DBFB">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#48DBFB"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#C8D6E5" value="#C8D6E5" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#C8D6E5">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#C8D6E5"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#7F8C8D" value="#7F8C8D" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#7F8C8D">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#7F8C8D"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#1E3799" value="#1E3799" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#1E3799">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#1E3799"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#474787" value="#474787" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#474787">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#474787"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#833471" value="#833471" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#833471">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#833471"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#C0392B" value="#C0392B" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#C0392B">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#C0392B"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#B71540" value="#B71540" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#B71540">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#B71540"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_#218C74" value="#218C74" name="edit_category-color">
                                        <label class="btn p-1" for="edit_#218C74">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#218C74"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- Icon Image --}}
                            <div class="col">
                                <div class="row row-cols-4 gx-1">
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_meal" value="meal" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_meal">
                                            <img src="{{ asset('images/category-icon/meal.svg') }}" alt="meal" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_meal2" value="meal2" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_meal2">
                                            <img src="{{ asset('images/category-icon/meal2.svg') }}" alt="meal2" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_daily" value="daily" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_daily">
                                            <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_daily2" value="daily2" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_daily2">
                                            <img src="{{ asset('images/category-icon/daily2.svg') }}" alt="daily2" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_close" value="close" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_close">
                                            <img src="{{ asset('images/category-icon/close.svg') }}" alt="close" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_beauty" value="beauty" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_beauty">
                                            <img src="{{ asset('images/category-icon/beauty.svg') }}" alt="beauty" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_hang_out" value="hang_out" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_hang_out">
                                            <img src="{{ asset('images/category-icon/hang_out.svg') }}" alt="hang_out" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_rent" value="rent" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_rent">
                                            <img src="{{ asset('images/category-icon/rent.svg') }}" alt="rent" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_utilities" value="utilities" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_utilities">
                                            <img src="{{ asset('images/category-icon/utilities.svg') }}" alt="utilities" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_utilities2" value="utilities2" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_utilities2">
                                            <img src="{{ asset('images/category-icon/utilities2.svg') }}" alt="utilities2" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_data" value="data" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_data">
                                            <img src="{{ asset('images/category-icon/data.svg') }}" alt="data" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_transportation" value="transportation" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_transportation">
                                            <img src="{{ asset('images/category-icon/transportation.svg') }}" alt="transportation" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_education" value="education" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_education">
                                            <img src="{{ asset('images/category-icon/education.svg') }}" alt="education" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_medical" value="medical" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_medical">
                                            <img src="{{ asset('images/category-icon/medical.svg') }}" alt="medical" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_grocery" value="grocery" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_grocery">
                                            <img src="{{ asset('images/category-icon/grocery.svg') }}" alt="grocery" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_investment" value="investment" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_investment">
                                            <img src="{{ asset('images/category-icon/investment.svg') }}" alt="investment" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_income1" value="income1" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_income1">
                                            <img src="{{ asset('images/category-icon/income1.svg') }}" alt="income1" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_income2" value="income2" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_income2">
                                            <img src="{{ asset('images/category-icon/income2.svg') }}" alt="income2" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_income3" value="income3" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_income3">
                                            <img src="{{ asset('images/category-icon/income3.svg') }}" alt="income3" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="edit_income4" value="income4" name="edit_category-icon">
                                        <label class="btn p-1" for="edit_income4">
                                            <img src="{{ asset('images/category-icon/income4.svg') }}" alt="income4" width="33px">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>                    

                        <button type="submit" class="btn rounded-pill text-white fw-bold w-100 bg-color4">Update</button>
                    </form>
                </div>
            </div>

            {{-- Edit Income Category --}}
            <div id="editIncomeCategory" style="display: none" class="my-3 edit-items">
                <div class="card p-5 shadow border-0">
                    <form action="#" method="post">
                        @csrf

                        <ul class="nav nav-underline justify-content-center mb-4 tab__menu">
                            <li class="nav-item px-3">
                                <input type="radio" value="expense" name="category_type" id="type_expense" class="btn-check" disabled>
                                <label for="type_expense" class="btn nav-link rounded-0 text-secondary">expense</label>
                            </li>
                            <div class="vr"></div>
                            <li class="nav-item px-3">
                                <input type="radio" value="income" name="category_type" id="type_income" class="btn-check" checked>
                                <label for="type_income" class="btn nav-link rounded-0 text-secondary">income</label>
                            </li>
                        </ul>

                        <div class="row mb-4">
                            <div class="col text-end mt-2">
                            </div>
                            <div class="col text-center">
                                <input type="text" class="fs-5 text-center border-0 border-bottom border-dark bg-light py-2" id="name" placeholder="Parent Category" value="Income">
                            </div>
                            <div class="col text-end mt-2">
                                <button class="btn p-0">
                                    <i class="fa-solid fa-trash-can fs-4" style="color: #DF5656;"></i>                 
                                </button>
                            </div>
                        </div>
                        
                        <div class="row gx-5 mb-4">
                            {{-- Icon Color --}}
                            <div class="col ps-4">
                                <div class="row row-cols-4 gx-1">
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#2FCC71" value="#2FCC71" name="income_category-color">
                                        <label class="btn p-1" for="income_#2FCC71">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#2FCC71"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#B8E894" value="#B8E894" name="income_category-color">
                                        <label class="btn p-1" for="income_#B8E894">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#B8E894"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#FFE9A7" value="#FFE9A7" name="income_category-color">
                                        <label class="btn p-1" for="income_#FFE9A7">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FFE9A7"/>
                                            </svg>
                                        </label>
                                    </div>                                        
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#FECA57" value="#FECA57" name="income_category-color">
                                        <label class="btn p-1" for="income_#FECA57">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FECA57"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#FFAA3F" value="#FFAA3F" name="income_category-color">
                                        <label class="btn p-1" for="income_#FFAA3F">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FFAA3F"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#FF7F50" value="#FF7F50" name="income_category-color">
                                        <label class="btn p-1" for="income_#FF7F50">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FF7F50"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#FF3F34" value="#FF3F34" name="income_category-color">
                                        <label class="btn p-1" for="income_#FF3F34">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FF3F34"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#FD79A8" value="#FD79A8" name="income_category-color">
                                        <label class="btn p-1" for="income_#FD79A8">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FD79A8"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#F8A5C2" value="#F8A5C2" name="income_category-color">
                                        <label class="btn p-1" for="income_#F8A5C2">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#F8A5C2"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#FF9FF3" value="#FF9FF3" name="income_category-color">
                                        <label class="btn p-1" for="income_#FF9FF3">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FF9FF3"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#D980FA" value="#D980FA" name="income_category-color">
                                        <label class="btn p-1" for="income_#D980FA">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#D980FA"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#6C5CE7" value="#6C5CE7" name="income_category-color">
                                        <label class="btn p-1" for="income_#6C5CE7">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#6C5CE7"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#0652DD" value="#0652DD" name="income_category-color">
                                        <label class="btn p-1" for="income_#0652DD">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#0652DD"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#2E86DE" value="#2E86DE" name="income_category-color">
                                        <label class="btn p-1" for="income_#2E86DE">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#2E86DE"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#54A0FF" value="#54A0FF" name="income_category-color">
                                        <label class="btn p-1" for="income_#54A0FF">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#54A0FF"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#48DBFB" value="#48DBFB" name="income_category-color">
                                        <label class="btn p-1" for="income_#48DBFB">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#48DBFB"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#C8D6E5" value="#C8D6E5" name="income_category-color">
                                        <label class="btn p-1" for="income_#C8D6E5">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#C8D6E5"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#7F8C8D" value="#7F8C8D" name="income_category-color">
                                        <label class="btn p-1" for="income_#7F8C8D">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#7F8C8D"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#1E3799" value="#1E3799" name="income_category-color">
                                        <label class="btn p-1" for="income_#1E3799">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#1E3799"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#474787" value="#474787" name="income_category-color">
                                        <label class="btn p-1" for="income_#474787">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#474787"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#833471" value="#833471" name="income_category-color">
                                        <label class="btn p-1" for="income_#833471">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#833471"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#C0392B" value="#C0392B" name="income_category-color">
                                        <label class="btn p-1" for="income_#C0392B">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#C0392B"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#B71540" value="#B71540" name="income_category-color">
                                        <label class="btn p-1" for="income_#B71540">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#B71540"/>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_#218C74" value="#218C74" name="income_category-color">
                                        <label class="btn p-1" for="income_#218C74">
                                            <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#218C74"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- Icon Image --}}
                            <div class="col">
                                <div class="row row-cols-4 gx-1">
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_meal" value="meal" name="income_category-icon">
                                        <label class="btn p-1" for="income_meal">
                                            <img src="{{ asset('images/category-icon/meal.svg') }}" alt="meal" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_meal2" value="meal2" name="income_category-icon">
                                        <label class="btn p-1" for="income_meal2">
                                            <img src="{{ asset('images/category-icon/meal2.svg') }}" alt="meal2" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_daily" value="daily" name="income_category-icon">
                                        <label class="btn p-1" for="income_daily">
                                            <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_daily2" value="daily2" name="income_category-icon">
                                        <label class="btn p-1" for="income_daily2">
                                            <img src="{{ asset('images/category-icon/daily2.svg') }}" alt="daily2" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_close" value="close" name="income_category-icon">
                                        <label class="btn p-1" for="income_close">
                                            <img src="{{ asset('images/category-icon/close.svg') }}" alt="close" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_beauty" value="beauty" name="income_category-icon">
                                        <label class="btn p-1" for="income_beauty">
                                            <img src="{{ asset('images/category-icon/beauty.svg') }}" alt="beauty" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_hang_out" value="hang_out" name="income_category-icon">
                                        <label class="btn p-1" for="income_hang_out">
                                            <img src="{{ asset('images/category-icon/hang_out.svg') }}" alt="hang_out" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_rent" value="rent" name="income_category-icon">
                                        <label class="btn p-1" for="income_rent">
                                            <img src="{{ asset('images/category-icon/rent.svg') }}" alt="rent" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_utilities" value="utilities" name="income_category-icon">
                                        <label class="btn p-1" for="income_utilities">
                                            <img src="{{ asset('images/category-icon/utilities.svg') }}" alt="utilities" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_utilities2" value="utilities2" name="income_category-icon">
                                        <label class="btn p-1" for="income_utilities2">
                                            <img src="{{ asset('images/category-icon/utilities2.svg') }}" alt="utilities2" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_data" value="data" name="income_category-icon">
                                        <label class="btn p-1" for="income_data">
                                            <img src="{{ asset('images/category-icon/data.svg') }}" alt="data" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_transportation" value="transportation" name="income_category-icon">
                                        <label class="btn p-1" for="income_transportation">
                                            <img src="{{ asset('images/category-icon/transportation.svg') }}" alt="transportation" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_education" value="education" name="income_category-icon">
                                        <label class="btn p-1" for="income_education">
                                            <img src="{{ asset('images/category-icon/education.svg') }}" alt="education" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_medical" value="medical" name="income_category-icon">
                                        <label class="btn p-1" for="income_medical">
                                            <img src="{{ asset('images/category-icon/medical.svg') }}" alt="medical" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_grocery" value="grocery" name="income_category-icon">
                                        <label class="btn p-1" for="income_grocery">
                                            <img src="{{ asset('images/category-icon/grocery.svg') }}" alt="grocery" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_investment" value="investment" name="income_category-icon">
                                        <label class="btn p-1" for="income_investment">
                                            <img src="{{ asset('images/category-icon/investment.svg') }}" alt="investment" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_income1" value="income1" name="income_category-icon">
                                        <label class="btn p-1" for="income_income1">
                                            <img src="{{ asset('images/category-icon/income1.svg') }}" alt="income1" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_income2" value="income2" name="income_category-icon">
                                        <label class="btn p-1" for="income_income2">
                                            <img src="{{ asset('images/category-icon/income2.svg') }}" alt="income2" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_income3" value="income3" name="income_category-icon">
                                        <label class="btn p-1" for="income_income3">
                                            <img src="{{ asset('images/category-icon/income3.svg') }}" alt="income3" width="33px">
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="btn-check" type="radio" id="income_income4" value="income4" name="income_category-icon">
                                        <label class="btn p-1" for="income_income4">
                                            <img src="{{ asset('images/category-icon/income4.svg') }}" alt="income4" width="33px">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>                    

                        <button type="submit" class="btn rounded-pill text-white fw-bold w-100 bg-color4">Update</button>
                    </form>
                </div>
            </div>

            {{-- Add Child Category (expense) --}}
            <div id="addChildCategory" style="display: none;" class="my-3 add-items expense-items">
                <div class="card p-5 border-0 shadow">
                    <form action="#" method="post">
                        <div class="row mb-5">
                            <div class="col text-end mt-3" style="color: #DF5656;">
                                <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                <span class="h5">Meal</span>
                            </div>
                            <div class="col">
                                <input type="text" class="fs-5 text-center border-0 border-bottom border-dark bg-light py-2" name="meal" id="meal" value="" placeholder="Child Category">
                            </div>
                            <div class="col text-end mt-3">
                            </div>
                        </div>
                        <button type="submit" class="btn rounded-pill text-white fw-bold w-100 bg-color4">Save</button>
                    </form>
                </div>
            </div>

            {{-- Edit Child Category (expense) --}}
            <div id="editChildCategory" style="display: none;" class="my-3 edit-items expense-items">
                <div class="card p-5 border-0 shadow">
                    <form action="#" method="post">
                        <div class="row mb-5">
                            <div class="col text-end mt-3" style="color: #DF5656;">
                                <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="25px">
                                <span class="h5">Meal</span>
                            </div>
                            <div class="col">
                                <input type="text" class="fs-5 text-center border-0 border-bottom border-dark bg-light py-2" name="meal" id="meal" value="cafe" placeholder="Child Category">
                            </div>
                            <div class="col text-end mt-3">
                                <button class="btn p-0">
                                    <i class="fa-solid fa-trash-can fs-4" style="color: #DF5656;"></i>                 
                                </button>
                            </div>
                        </div>
                        <button type="submit" class="btn rounded-pill text-white fw-bold w-100 bg-color4">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/category-edit.js') }}"></script>

@endsection
