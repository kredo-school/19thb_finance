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
                        {{-- Show Parent Category --}}
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
                        {{-- Show Child Category --}}
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
                <a href="{{ route('category.create') }}" class="btn mb-1 btn-main">
                    <i class="fa-solid fa-circle-plus me-1"></i> Add Category
                </a>
                <p class="small m-0 text-center">you can make your own original category.</p>
                <p class="small text-center">you can also customize default categories.</p>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/category-edit.js') }}"></script>

@endsection
