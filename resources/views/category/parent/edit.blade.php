@extends('layouts.app')

@section('content')

<main class="row container mx-auto">
    <aside class="col-auto" style="min-height: calc(100vh - 160px); background-color: #FFE4D6;">
        @include('components.sidebar')
    </aside>
    <article class="col">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 p-4">
                    <h3 class="text-center">Category</h3>
                    <div class="bg-color-Rainbow mx-auto mb-2" style="width: 50px; height: 2px;"></div>
                    
                    {{-- Show Category --}}
                    <div class="row justify-content-center">
                        <div class="card p-4 mb-4 border-0 bg-color-Background">
                            <ul class="nav nav-underline justify-content-center mb-3">
                                <li class="nav-item px-3">
                                    <button type="button" class="nav-link text-secondary {{ $parent_category->type == 'expense' ? 'active' : '' }}" id="expense">expense</button>
                                </li>
                                <div class="vr"></div>
                                <li class="nav-item px-3">
                                    <button type="button" class="nav-link text-secondary {{ $parent_category->type == 'income' ? 'active' : '' }}" id="income">income</button>
                                </li>
                            </ul>
                            {{-- Show Expense Category --}}
                            <div id="expense_categories" style="display: {{ $parent_category->type == 'expense' ? 'block' : 'none' }}">
                                {{-- Parent Category --}}
                                <div class="row row-cols-auto bg-light shadow rounded-3 p-4 gx-4 gy-2 mb-5">
                                    @foreach ($user->parentCategories as $user_parent_category)
                                        @if ($user_parent_category->type == 'expense')
                                            <div class="col p-0">
                                                <a href="{{ route('category.child.show', $user_parent_category->id) }}" class="btn btn-lg px-3 {{ Request::segment(3) == $user_parent_category->id ? 'active' : '' }}" style="color: #{{ $user_parent_category->color_hex }}" title="{{ $user_parent_category->name }}">
                                                    <img src="{{ asset('images/category-icon/' . $user_parent_category->icon_path . '.svg') }}" alt="{{ $user_parent_category->icon_path }}" width="25px" height="25px" class="me-1 filter-{{ $user_parent_category->color_hex }}">
                                                    {{ $user_parent_category->name }}
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                {{-- Child Category --}}
                                <div class="row justify-content-center">
                                    @if ($parent_category->type == 'expense')
                                        <div class="card p-4 shadow border-0 rounded-3 balloon">
                                            <div class="d-flex justify-content-between mb-4">
                                                <a href="{{ route('category.parent.edit', $parent_category->id) }}" class="h5 link-offset-3 px-3 my-auto ms-2 {{ Request::segment(3) == $parent_category->id ? 'fw-bold' : '' }}" style="color: #{{ $parent_category->color_hex }}; text-decoration-thickness: {{ Request::segment(3) == $parent_category->id ? '3px' : '' }};">
                                                    <img src="{{ asset('images/category-icon/' . $parent_category->icon_path . '.svg') }}" alt="{{ $parent_category->icon_path }}" width="25px" height="25px" class="me-1 filter-{{ $parent_category->color_hex }}">
                                                    {{ $parent_category->name }}
                                                </a>
                                                <a href="{{ route('category.child.create', $parent_category->id) }}" class="btn my-auto">
                                                    <img src="{{ asset('images/plus-icon.svg') }}" alt="plus-icon" class="filter-{{ $parent_category->color_hex }}">
                                                </a>
                                            </div>
                                            <div class="row row-cols-auto gx-5 gy-4 mx-3 mb-2">
                                                @foreach ($parent_category->childCategories as $parent_child_category)
                                                    <div class="col">
                                                        <a href="{{ route('category.child.edit', [$parent_child_category->parent_category_id, $parent_child_category->id]) }}" class="h5 link-offset-3 {{ Request::segment(4) == $parent_child_category->id ? 'fw-bold' : '' }}" style="text-decoration-thickness: {{ Request::segment(4) == $parent_child_category->id ? '3px' : '' }};">{{ $parent_child_category->name }}</a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            {{-- Show Income Category --}}
                            <div id="income_categories" style="display: {{ $parent_category->type == 'income' ? 'block' : 'none' }};">
                                <div class="row row-cols-auto bg-light shadow rounded-3 p-4 gx-4 gy-2">
                                    @foreach ($user->parentCategories as $user_parent_category)
                                        @if ($user_parent_category->type == 'income')
                                            <div class="col p-0">
                                                <a href="{{ route('category.parent.edit', $user_parent_category->id) }}" class="h5 link-offset-3 px-3 {{ Request::segment(3) == $user_parent_category->id ? 'fw-bold' : '' }}" style="color: #{{ $user_parent_category->color_hex }}; text-decoration-thickness: {{ Request::segment(3) == $user_parent_category->id ? '3px' : '' }};">
                                                    <img src="{{ asset('images/category-icon/' . $user_parent_category->icon_path . '.svg') }}" alt="{{ $user_parent_category->icon_path }}" width="25px" height="25px" class="me-1 filter-{{ $user_parent_category->color_hex }}">
                                                    {{ $user_parent_category->name }}
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>
        
                <div class="col-lg-6 p-4">
                    <div class="row justify-content-center px-5">
                        <a href="{{ route('category.create') }}" class="btn mb-1 btn-main">
                            <i class="fa-solid fa-circle-plus me-1"></i> Add Category
                        </a>
                        <p class="small m-0 text-center">you can make your own original category.</p>
                        <p class="small text-center">you can also customize default categories.</p>
                    </div>
                    {{-- Edit Parent Category --}}
                    <div class="card my-3 p-5 shadow border-0">
                        <form action="{{ route('category.parent.update', $parent_category->id) }}" method="post">
                            @csrf
                            @method('PATCH')
        
                            <ul class="nav nav-underline justify-content-center mb-4">
                                <li class="nav-item px-3">
                                    <input type="radio" value="expense" name="type" id="type_expense" class="btn-check" {{ $parent_category->type == 'expense' ? 'checked' : '' }}>
                                    <label for="type_expense" class="btn nav-link rounded-0 text-secondary">expense</label>
                                </li>
                                <div class="vr"></div>
                                <li class="nav-item px-3">
                                    <input type="radio" value="income" name="type" id="type_income" class="btn-check" {{ $parent_category->type == 'income' ? 'checked' : '' }}>
                                    <label for="type_income" class="btn nav-link rounded-0 text-secondary">income</label>
                                </li>
                            </ul>
                            @error('type')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
        
                            <div class="row mb-4">
                                <div class="col text-end mt-2">
                                </div>
                                <div class="col text-center">
                                    <input type="text" class="fs-5 text-center border-0 border-bottom border-dark bg-light py-2" name="name" id="name" placeholder="Name (Parent)" value="{{ old('name', $parent_category->name) }}">
                                    @error('name')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col text-end mt-2">
                                    <button type="button" class="btn p-0" title="Delete" data-bs-toggle="modal" data-bs-target="#delete-parent_category-{{$parent_category->id}}">
                                        <i class="fa-solid fa-trash-can fs-4 text-danger"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="row gx-5 mb-4">
                                {{-- Icon Color --}}
                                <div class="col ps-4 pe-3">
                                    <div class="row row-cols-4 gx-1">
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#2FCC71" value="2FCC71" name="color_hex" {{ $parent_category->color_hex == '2FCC71' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#2FCC71">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#2FCC71"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#B8E894" value="B8E894" name="color_hex" {{ $parent_category->color_hex == 'B8E894' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#B8E894">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#B8E894"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#FFD70A" value="FFD70A" name="color_hex" {{ $parent_category->color_hex == 'FFD70A' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#FFD70A">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FFD70A"/>
                                                </svg>
                                            </label>
                                        </div>                                        
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#FECA57" value="FECA57" name="color_hex" {{ $parent_category->color_hex == 'FECA57' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#FECA57">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FECA57"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#FFAA3F" value="FFAA3F" name="color_hex" {{ $parent_category->color_hex == 'FFAA3F' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#FFAA3F">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FFAA3F"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#FF7F50" value="FF7F50" name="color_hex" {{ $parent_category->color_hex == 'FF7F50' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#FF7F50">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FF7F50"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#FF3F34" value="FF3F34" name="color_hex" {{ $parent_category->color_hex == 'FF3F34' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#FF3F34">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FF3F34"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#FD79A8" value="FD79A8" name="color_hex" {{ $parent_category->color_hex == 'FD79A8' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#FD79A8">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FD79A8"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#F8A5C2" value="F8A5C2" name="color_hex" {{ $parent_category->color_hex == 'F8A5C2' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#F8A5C2">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#F8A5C2"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#FF9FF3" value="FF9FF3" name="color_hex" {{ $parent_category->color_hex == 'FF9FF3' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#FF9FF3">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FF9FF3"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#D980FA" value="D980FA" name="color_hex" {{ $parent_category->color_hex == 'D980FA' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#D980FA">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#D980FA"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#6C5CE7" value="6C5CE7" name="color_hex" {{ $parent_category->color_hex == '6C5CE7' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#6C5CE7">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#6C5CE7"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#0652DD" value="0652DD" name="color_hex" {{ $parent_category->color_hex == '0652DD' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#0652DD">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#0652DD"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#2E86DE" value="2E86DE" name="color_hex" {{ $parent_category->color_hex == '2E86DE' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#2E86DE">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#2E86DE"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#54A0FF" value="54A0FF" name="color_hex" {{ $parent_category->color_hex == '54A0FF' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#54A0FF">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#54A0FF"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#48DBFB" value="48DBFB" name="color_hex" {{ $parent_category->color_hex == '48DBFB' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#48DBFB">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#48DBFB"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#C8D6E5" value="C8D6E5" name="color_hex" {{ $parent_category->color_hex == 'C8D6E5' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#C8D6E5">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#C8D6E5"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#7F8C8D" value="7F8C8D" name="color_hex" {{ $parent_category->color_hex == '7F8C8D' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#7F8C8D">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#7F8C8D"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#1E3799" value="1E3799" name="color_hex" {{ $parent_category->color_hex == '1E3799' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#1E3799">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#1E3799"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#474787" value="474787" name="color_hex" {{ $parent_category->color_hex == '474787' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#474787">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#474787"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#833471" value="833471" name="color_hex" {{ $parent_category->color_hex == '833471' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#833471">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#833471"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#C0392B" value="C0392B" name="color_hex" {{ $parent_category->color_hex == 'C0392B' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#C0392B">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#C0392B"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#B71540" value="B71540" name="color_hex" {{ $parent_category->color_hex == 'B71540' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#B71540">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#B71540"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_#218C74" value="218C74" name="color_hex" {{ $parent_category->color_hex == '218C74' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_#218C74">
                                                <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#218C74"/>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                    @error('color_hex')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                {{-- Icon Image --}}
                                <div class="col pe-4">
                                    <div class="row row-cols-4 gx-1">
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_meal" value="meal" name="icon_path" {{ $parent_category->icon_path == 'meal' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_meal">
                                                <img src="{{ asset('images/category-icon/meal.svg') }}" alt="meal" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_meal2" value="meal2" name="icon_path" {{ $parent_category->icon_path == 'meal2' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_meal2">
                                                <img src="{{ asset('images/category-icon/meal2.svg') }}" alt="meal2" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_grocery" value="grocery" name="icon_path" {{ $parent_category->icon_path == 'grocery' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_grocery">
                                                <img src="{{ asset('images/category-icon/grocery.svg') }}" alt="grocery" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_daily" value="daily" name="icon_path" {{ $parent_category->icon_path == 'daily' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_daily">
                                                <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_daily2" value="daily2" name="icon_path" {{ $parent_category->icon_path == 'daily2' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_daily2">
                                                <img src="{{ asset('images/category-icon/daily2.svg') }}" alt="daily2" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_dog" value="dog" name="icon_path" {{ $parent_category->icon_path == 'dog' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_dog">
                                                <img src="{{ asset('images/category-icon/dog.svg') }}" alt="dog" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_close" value="close" name="icon_path" {{ $parent_category->icon_path == 'close' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_close">
                                                <img src="{{ asset('images/category-icon/close.svg') }}" alt="close" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_beauty" value="beauty" name="icon_path" {{ $parent_category->icon_path == 'beauty' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_beauty">
                                                <img src="{{ asset('images/category-icon/beauty.svg') }}" alt="beauty" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_hang_out" value="hang_out" name="icon_path" {{ $parent_category->icon_path == 'hang_out' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_hang_out">
                                                <img src="{{ asset('images/category-icon/hang_out.svg') }}" alt="hang_out" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_rent" value="rent" name="icon_path" {{ $parent_category->icon_path == 'rent' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_rent">
                                                <img src="{{ asset('images/category-icon/rent.svg') }}" alt="rent" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_utilities" value="utilities" name="icon_path" {{ $parent_category->icon_path == 'utilities' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_utilities">
                                                <img src="{{ asset('images/category-icon/utilities.svg') }}" alt="utilities" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_utilities2" value="utilities2" name="icon_path" {{ $parent_category->icon_path == 'utilities2' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_utilities2">
                                                <img src="{{ asset('images/category-icon/utilities2.svg') }}" alt="utilities2" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_hobby" value="hobby" name="icon_path" {{ $parent_category->icon_path == 'hobby' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_hobby">
                                                <img src="{{ asset('images/category-icon/hobby.svg') }}" alt="hobby" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_data" value="data" name="icon_path" {{ $parent_category->icon_path == 'data' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_data">
                                                <img src="{{ asset('images/category-icon/data.svg') }}" alt="data" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_transportation" value="transportation" name="icon_path" {{ $parent_category->icon_path == 'transportation' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_transportation">
                                                <img src="{{ asset('images/category-icon/transportation.svg') }}" alt="transportation" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_education" value="education" name="icon_path" {{ $parent_category->icon_path == 'education' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_education">
                                                <img src="{{ asset('images/category-icon/education.svg') }}" alt="education" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_books" value="books" name="icon_path" {{ $parent_category->icon_path == 'books' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_books">
                                                <img src="{{ asset('images/category-icon/books.svg') }}" alt="books" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_medical" value="medical" name="icon_path" {{ $parent_category->icon_path == 'medical' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_medical">
                                                <img src="{{ asset('images/category-icon/medical.svg') }}" alt="medical" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_investment" value="investment" name="icon_path" {{ $parent_category->icon_path == 'investment' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_investment">
                                                <img src="{{ asset('images/category-icon/investment.svg') }}" alt="investment" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_expense1" value="expense1" name="icon_path" {{ $parent_category->icon_path == 'expense1' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_expense1">
                                                <img src="{{ asset('images/category-icon/expense1.svg') }}" alt="expense1" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_income1" value="income1" name="icon_path" {{ $parent_category->icon_path == 'income1' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_income1">
                                                <img src="{{ asset('images/category-icon/income1.svg') }}" alt="income1" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_income2" value="income2" name="icon_path" {{ $parent_category->icon_path == 'income2' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_income2">
                                                <img src="{{ asset('images/category-icon/income2.svg') }}" alt="income2" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_income3" value="income3" name="icon_path" {{ $parent_category->icon_path == 'income3' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_income3">
                                                <img src="{{ asset('images/category-icon/income3.svg') }}" alt="income3" width="30px" height="30px">
                                            </label>
                                        </div>
                                        <div class="form-check p-0">
                                            <input class="btn-check" type="radio" id="edit_income4" value="income4" name="icon_path" {{ $parent_category->icon_path == 'income4' ? 'checked' : '' }}>
                                            <label class="btn p-1" for="edit_income4">
                                                <img src="{{ asset('images/category-icon/income4.svg') }}" alt="income4" width="30px" height="30px">
                                            </label>
                                        </div>
                                    </div>
                                    @error('icon_path')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>                    
        
                            <button type="submit" class="btn w-100 btn-main">Update</button>
                        </form>
        
                        {{-- modal : delete parent_category --}}
                        @include('category.parent.modal.delete')
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>

<script src="{{ asset('js/category-edit.js') }}"></script>

@endsection