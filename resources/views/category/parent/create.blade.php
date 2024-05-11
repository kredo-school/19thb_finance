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
                    <ul class="nav nav-underline justify-content-center mb-3">
                        <li class="nav-item px-3">
                            <button type="button" class="nav-link text-secondary active" id="expense">expense</button>
                        </li>
                        <div class="vr"></div>
                        <li class="nav-item px-3">
                            <button type="button" class="nav-link text-secondary" id="income">income</button>
                        </li>
                    </ul>
                    {{-- Show Expense Category --}}
                    <div id="expense_categories">
                        {{-- Parent Category --}}
                        <div class="row row-cols-3 bg-light shadow rounded-3 p-4">
                            @foreach ($user->parentCategories as $user_parent_category)
                                @if ($user_parent_category->type == 'expense')
                                    <div class="col my-2">
                                        <a href="{{ route('category.child.show', $user_parent_category->id) }}" class="btn btn-lg px-3 text-truncate" style="color: #{{ $user_parent_category->color_hex }}">
                                            <img src="{{ asset('images/category-icon/' . $user_parent_category->icon_path . '.svg') }}" alt="{{ $user_parent_category->icon_path }}" width="25px" class="me-1 filter-{{ $user_parent_category->color_hex }}">
                                            {{ $user_parent_category->name }}
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        {{-- Child Category --}}
                    </div>
                    {{-- Show Income Category --}}
                    <div id="income_categories" style="display: none;">
                        <div class="row row-cols-3 bg-light shadow rounded-3 p-4">
                            @foreach ($user->parentCategories as $user_parent_category)
                                @if ($user_parent_category->type == 'income')
                                    <div class="col my-2">
                                        <a href="{{ route('category.parent.edit', $user_parent_category->id) }}" class="h5 link-offset-3 px-3 text-truncate" style="color: #{{ $user_parent_category->color_hex }}">
                                            <img src="{{ asset('images/category-icon/' . $user_parent_category->icon_path . '.svg') }}" alt="{{ $user_parent_category->icon_path }}" width="25px" class="me-1 filter-{{ $user_parent_category->color_hex }}">
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

        <div class="col-lg-5 col-md-8 m-3">
            <div class="row justify-content-center px-5">
                <a href="{{ route('category.create') }}" class="btn bg-white border-2 rounded-pill w-100 mb-1 disabled" style="color: #F7A072; border-color: #F7A072;">
                    <i class="fa-solid fa-circle-plus me-1"></i> Add Category
                </a>
                <p class="small m-0 text-center">you can make your own original category.</p>
                <p class="small text-center">you can also customize default categories.</p>
            </div>
            {{-- Add Category --}}
            <div class="card p-5 my-3 shadow border-0">
                <form action="{{ route('category.parent.store') }}" method="post">
                    @csrf
        
                    <ul class="nav nav-underline justify-content-center mb-4">
                        <li class="nav-item px-3">
                            <input type="radio" value="expense" name="type" id="type_expense" class="btn-check" checked>
                            <label for="type_expense" class="btn nav-link rounded-0 text-secondary">expense</label>
                        </li>
                        <div class="vr"></div>
                        <li class="nav-item px-3">
                            <input type="radio" value="income" name="type" id="type_income" class="btn-check">
                            <label for="type_income" class="btn nav-link rounded-0 text-secondary">income</label>
                        </li>
                    </ul>
                    @error('type')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
        
                    <div class="row mb-4">
                        <div class="col text-center">
                            <input type="text" class="fs-5 text-center border-0 border-bottom border-dark bg-light py-2" name="name" id="name" placeholder="Name (Parent)" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row gx-5 mb-4">
                        {{-- Icon Color --}}
                        <div class="col ps-4">
                            <div class="row row-cols-4 gx-1">
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#2FCC71" value="2FCC71" name="color_hex">
                                    <label class="btn p-1" for="#2FCC71">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#2FCC71"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#B8E894" value="B8E894" name="color_hex">
                                    <label class="btn p-1" for="#B8E894">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#B8E894"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#FFD70A" value="FFD70A" name="color_hex">
                                    <label class="btn p-1" for="#FFD70A">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FFD70A"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#FECA57" value="FECA57" name="color_hex">
                                    <label class="btn p-1" for="#FECA57">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FECA57"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#FFAA3F" value="FFAA3F" name="color_hex">
                                    <label class="btn p-1" for="#FFAA3F">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FFAA3F"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#FF7F50" value="FF7F50" name="color_hex">
                                    <label class="btn p-1" for="#FF7F50">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FF7F50"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#FF3F34" value="FF3F34" name="color_hex">
                                    <label class="btn p-1" for="#FF3F34">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FF3F34"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#FD79A8" value="FD79A8" name="color_hex">
                                    <label class="btn p-1" for="#FD79A8">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FD79A8"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#F8A5C2" value="F8A5C2" name="color_hex">
                                    <label class="btn p-1" for="#F8A5C2">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#F8A5C2"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#FF9FF3" value="FF9FF3" name="color_hex">
                                    <label class="btn p-1" for="#FF9FF3">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#FF9FF3"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#D980FA" value="D980FA" name="color_hex">
                                    <label class="btn p-1" for="#D980FA">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#D980FA"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#6C5CE7" value="6C5CE7" name="color_hex">
                                    <label class="btn p-1" for="#6C5CE7">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#6C5CE7"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#0652DD" value="0652DD" name="color_hex">
                                    <label class="btn p-1" for="#0652DD">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#0652DD"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#2E86DE" value="2E86DE" name="color_hex">
                                    <label class="btn p-1" for="#2E86DE">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#2E86DE"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#54A0FF" value="54A0FF" name="color_hex">
                                    <label class="btn p-1" for="#54A0FF">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#54A0FF"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#48DBFB" value="48DBFB" name="color_hex">
                                    <label class="btn p-1" for="#48DBFB">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#48DBFB"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#C8D6E5" value="C8D6E5" name="color_hex">
                                    <label class="btn p-1" for="#C8D6E5">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#C8D6E5"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#7F8C8D" value="7F8C8D" name="color_hex">
                                    <label class="btn p-1" for="#7F8C8D">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#7F8C8D"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#1E3799" value="1E3799" name="color_hex">
                                    <label class="btn p-1" for="#1E3799">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#1E3799"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#474787" value="474787" name="color_hex">
                                    <label class="btn p-1" for="#474787">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#474787"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#833471" value="833471" name="color_hex">
                                    <label class="btn p-1" for="#833471">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#833471"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#C0392B" value="C0392B" name="color_hex">
                                    <label class="btn p-1" for="#C0392B">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#C0392B"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#B71540" value="B71540" name="color_hex">
                                    <label class="btn p-1" for="#B71540">
                                        <svg width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="16.0108" cy="15.2626" rx="13.4678" ry="12.7196" fill="#B71540"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="#218C74" value="218C74" name="color_hex">
                                    <label class="btn p-1" for="#218C74">
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
                        <div class="col">
                            <div class="row row-cols-4 gx-1">
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="meal" value="meal" name="icon_path">
                                    <label class="btn p-1" for="meal">
                                        <img src="{{ asset('images/category-icon/meal.svg') }}" alt="meal" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="meal2" value="meal2" name="icon_path">
                                    <label class="btn p-1" for="meal2">
                                        <img src="{{ asset('images/category-icon/meal2.svg') }}" alt="meal2" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="daily" value="daily" name="icon_path">
                                    <label class="btn p-1" for="daily">
                                        <img src="{{ asset('images/category-icon/daily.svg') }}" alt="daily" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="daily2" value="daily2" name="icon_path">
                                    <label class="btn p-1" for="daily">
                                        <img src="{{ asset('images/category-icon/daily2.svg') }}" alt="daily2" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="close" value="close" name="icon_path">
                                    <label class="btn p-1" for="close">
                                        <img src="{{ asset('images/category-icon/close.svg') }}" alt="close" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="beauty" value="beauty" name="icon_path">
                                    <label class="btn p-1" for="beauty">
                                        <img src="{{ asset('images/category-icon/beauty.svg') }}" alt="beauty" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="hang_out" value="hang_out" name="icon_path">
                                    <label class="btn p-1" for="hang_out">
                                        <img src="{{ asset('images/category-icon/hang_out.svg') }}" alt="hang_out" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="rent" value="rent" name="icon_path">
                                    <label class="btn p-1" for="rent">
                                        <img src="{{ asset('images/category-icon/rent.svg') }}" alt="rent" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="utilities" value="utilities" name="icon_path">
                                    <label class="btn p-1" for="utilities">
                                        <img src="{{ asset('images/category-icon/utilities.svg') }}" alt="utilities" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="utilities2" value="utilities2" name="icon_path">
                                    <label class="btn p-1" for="utilities2">
                                        <img src="{{ asset('images/category-icon/utilities2.svg') }}" alt="utilities2" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="data" value="data" name="icon_path">
                                    <label class="btn p-1" for="data">
                                        <img src="{{ asset('images/category-icon/data.svg') }}" alt="data" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="transportation" value="transportation" name="icon_path">
                                    <label class="btn p-1" for="transportation">
                                        <img src="{{ asset('images/category-icon/transportation.svg') }}" alt="transportation" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="education" value="education" name="icon_path">
                                    <label class="btn p-1" for="education">
                                        <img src="{{ asset('images/category-icon/education.svg') }}" alt="education" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="medical" value="medical" name="icon_path">
                                    <label class="btn p-1" for="medical">
                                        <img src="{{ asset('images/category-icon/medical.svg') }}" alt="medical" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="grocery" value="grocery" name="icon_path">
                                    <label class="btn p-1" for="grocery">
                                        <img src="{{ asset('images/category-icon/grocery.svg') }}" alt="grocery" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="investment" value="investment" name="icon_path">
                                    <label class="btn p-1" for="investment">
                                        <img src="{{ asset('images/category-icon/investment.svg') }}" alt="investment" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="income1" value="income1" name="icon_path">
                                    <label class="btn p-1" for="income1">
                                        <img src="{{ asset('images/category-icon/income1.svg') }}" alt="income1" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="income2" value="income2" name="icon_path">
                                    <label class="btn p-1" for="income2">
                                        <img src="{{ asset('images/category-icon/income2.svg') }}" alt="income2" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="income3" value="income3" name="icon_path">
                                    <label class="btn p-1" for="income3">
                                        <img src="{{ asset('images/category-icon/income3.svg') }}" alt="income3" width="33px">
                                    </label>
                                </div>
                                <div class="form-check p-0">
                                    <input class="btn-check" type="radio" id="income4" value="income4" name="icon_path">
                                    <label class="btn p-1" for="income4">
                                        <img src="{{ asset('images/category-icon/income4.svg') }}" alt="income4" width="33px">
                                    </label>
                                </div>
                            </div>
                            @error('icon_path')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
        
                    <button type="submit" class="btn w-100 btn-main">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/category-edit.js') }}"></script>

@endsection