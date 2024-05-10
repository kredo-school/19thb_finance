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
                        <div class="row row-cols-3 bg-light shadow rounded-3 p-4 mb-5">
                            @foreach ($user->parentCategories as $user_parent_category)
                                @if ($user_parent_category->type == 'expense')
                                    <div class="col my-2">
                                        <a href="{{ route('category.child.show', $user_parent_category->id) }}" class="btn btn-lg px-3 text-truncate {{ Request::segment(2) == $user_parent_category->id ? 'active' : '' }}" style="color: #{{ $user_parent_category->color_hex }}">
                                            <img src="{{ asset('images/category-icon/' . $user_parent_category->icon_path . '.svg') }}" alt="{{ $user_parent_category->icon_path }}" width="25px" class="me-1 filter-{{ $user_parent_category->color_hex }}">
                                            {{ $user_parent_category->name }}
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        {{-- Child Category --}}
                        <div class="row justify-content-center mt-4">
                            @if ($parent_category->type == 'expense')
                                <div class="card p-4 shadow border-0 rounded-3 balloon">
                                    <div class="d-flex justify-content-between mx-2 mb-2">
                                        <a href="{{ route('category.parent.edit', $parent_category->id) }}" class="h5 link-offset-3 px-3 my-auto ms-2" style="color: #{{ $parent_category->color_hex }};">
                                            <img src="{{ asset('images/category-icon/' . $parent_category->icon_path . '.svg') }}" alt="daily" width="25px" class="me-1 filter-{{ $parent_category->color_hex }}">
                                            {{ $parent_category->name }}
                                        </a>
                                        <button class="btn border-0 my-auto disabled">
                                            <img src="{{ asset('images/plus-icon.svg') }}" alt="" class="filter-{{ $parent_category->color_hex }}">        
                                        </button>
                                    </div>
                                    <div class="d-flex flex-wrap mx-3">
                                        @foreach ($parent_category->childCategories as $parent_child_category)
                                            <div class="mx-4 my-3 pe-2">
                                                <a href="{{ route('category.child.edit', [$parent_child_category->parent_category_id, $parent_child_category->id]) }}" class="h5 link-offset-3">{{ $parent_child_category->name }}</a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
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
            {{-- Add Child Category --}}
            <div class="card p-5 border-0 shadow mt-lg-5 my-3">
                <form action="{{ route('category.child.store', $parent_category->id) }}" method="post">
                    @csrf
                    <div class="row mb-5">
                        <div class="col text-end mt-3" style="color: #{{ $parent_category->color_hex }};">
                            <img src="{{ asset('images/category-icon/' . $parent_category->icon_path . '.svg') }}" alt="{{ $parent_category->icon_path }}" width="25px" class="filter-{{ $parent_category->color_hex }}">
                            <span class="h5">{{ $parent_category->name }}</span>
                        </div>
                        <div class="col">
                            <input type="text" class="fs-5 text-center border-0 border-bottom border-dark bg-light py-2" name="name" id="name" value="{{ old('name') }}" placeholder="Child Category">
                            @error('name')
                                <p class="text-danger small m-0">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col text-end mt-3">
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