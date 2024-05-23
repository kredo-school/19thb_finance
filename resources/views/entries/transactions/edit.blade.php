@extends('layouts.app')

@section('title', 'wish | new')

@section('content')
<main class="row container mx-auto">
    <aside class="col-auto" style="min-height: calc(100vh - 160px); background-color: #FFE4D6;">@include('components.sidebar')</aside>
    <article class="col-9 mt-4">

    <section class="container text-center">
        <div class="col card-wrapper mt-4 mx-auto">
        <p id="text"></p>
            <div class="card-wrapper mx-auto" style="max-width: 500px;">
                <!-- <h2 class="lh-1 fw-bold">New Wish</h2>
                <div class="bg-color-Rainbow mx-auto" style="width: 50px; height: 2px;"></div> -->

            <div class="tab">

                <!-- tab__menu -->
                <ul class="tab__menu row mx-auto align-items-center fw-bold list-unstyled" style="width:380px;">
                    <li class="tab__menu-item is-active col border-end" data-tab="01">
                        <p class="m-0 py-1">Expenses</p>
                        <hr class="w-50 mx-auto mt-1 mb-0">
                    </li>
                    <li class="tab__menu-item col border-end" data-tab="02">
                        <p class="color-Muted m-0 py-1">Income</p>
                    </li>
                    <li class="tab__menu-item col" data-tab="03">
                        <p class="color-Muted m-0 py-1">Bill Schedule</p>
                    </li>
                </ul>

                <!-- tab__panel -->
                <div class="tab__panel">
                    <div class="tab__panel-box tab__panel-box001 is-show" data-panel="01">
                        <div class="card my-4 py-5 px-5 border-0 shadow-sm">
                            <form method="POST" action="{{ route('entries.transactions.store') }}" class="form text-start">
                            @csrf 

                                <!-- Expenses -->
                                <input type="hidden" id="transaction_type" name="transaction_type" value="expense">

                                <!-- Date -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2">
                                    <label for="datetime" class="form-label h5 fw-bold color-Letter">Date</label>
                                    <input type="date" class="font-end ms-auto ps-auto pe-0 me-0 mb-2 border-0 text-end" name="datetime" value="{{ $today }}">
                                </div>

                                <!-- Price -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2 pt-4">
                                    <label for="amount" class="form-label h5 fw-bold color-Letter">Price</label>
                                    <input type="number" class="no-spin font-end ms-auto ps-auto pe-0 me-0 mb-2 border-0 text-end" name="amount" placeholder="0">
                                    <p class="ps-2 pt-1">yen</p>
                                </div>

                                <!-- Category -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2 pt-4 position-relative">
                                    <label for="category" class="category form-label h5 fw-bold color-Letter">Category</label>
                                    <p class="font-end ms-auto ps-auto pe-0 me-0 mb-2 border-0 text-end" id='selected' name="child_category_name">breakfast</p>
                                    <input type="hidden" id="child_category_id" name="child_category_id" value="26">
                            
                                    <!-- parent_category -->
                                    <div id="category_parent" class="hidden position-absolute text-center">
                                        <div class="position-relative">
                                            <strong>Category</strong>
                                            <hr>
                                            <ul class="tab d-flex justify-content-evenly flex-wrap p-0">
                                                @foreach($user->parentCategories as $parent_category)
                                                
                                                <li class="d-flex flex-item">
                                                    <div class="category-icon">
                                                        <img src="{{ asset('images/category-icon/' . $parent_category->icon_path . '.svg') }}" class="object-contain filter-{{ $parent_category->color_hex }}" alt="">
                                                    </div>
                                                    <p id="open" data-id='Meal' class="m-0 px-2 icon-link">
                                                        <a href="#{{ $parent_category->name }}" class="text-decoration-none" style="color: #{{ $parent_category->color_hex }};">{{ $parent_category->name }}</a>
                                                    </p>
                                                    
                                                </li>

                                                @endforeach
                                            </ul>

                                            <!-- child_category | Meal -->
                                            @foreach($user->parentCategories as $parent_category)
                                            <div id="{{ $parent_category->name }}" class="area child_category position-absolute text-center">
                                                <div class="fukidashi_child position-relative">
                                                    <div class="d-flex flex-item justify-content-center">
                                                        <div class="category-icon">
                                                            <img src="{{ asset('images/category-icon/' . $parent_category->icon_path . '.svg') }}" class="object-contain filter-{{ $parent_category->color_hex }}" id="child_image" alt="">
                                                        </div>
                                                        <p data-id='{{ $parent_category->name }}' class="m-0 px-2">
                                                            {{ $parent_category->name }}
                                                        </p>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-evenly">
                                                        @foreach($parent_category->childCategories as $child_category)
                                                        <p data-id='{{ $child_category->id }}' onclick="updateSelected(this)">{{ $child_category->name }}</p>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!-- absoluto -->
                                

                                <!-- Person -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2 pt-4 position-relative">
                                    <label for="person" class="form-label h5 fw-bold color-Letter">Person</label>
                                    <p class="font-end ms-auto ps-auto pe-0 me-0 mb-2 border-0 text-end" id='selected_person' name="child_category_name">sun</p>
                                    <input type="hidden" id="person_id" name="person_id" value="1">

                                    <!-- person -->
                                    <div id="person_archive" class="hidden position-absolute text-center">
                                        <div class="position-relative">
                                            <strong>People</strong>
                                            <hr>
                                            <ul class="tab d-flex justify-content-evenly flex-wrap p-0">
                                                @foreach($user->parentCategories as $parent_category)
                                                
                                                <li class="d-flex flex-item">
                                                    <div class="category-icon">
                                                        <img src="{{ asset('images/category-icon/' . $parent_category->icon_path . '.svg') }}" class="object-contain filter-{{ $parent_category->color_hex }}" alt="">
                                                    </div>
                                                    <p id="open" data-id='Meal' class="m-0 px-2 icon-link">
                                                        <a href="#{{ $parent_category->name }}" class="text-decoration-none" style="color: #{{ $parent_category->color_hex }};">{{ $parent_category->name }}</a>
                                                    </p>
                                                    
                                                </li>

                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            
                                <button type="submit" class="btn btn-main btn-lg px-5 mt-5 w-100">
                                    <span class="pt-1 fw-bold">Save</span>
                                </button>

                            </form>
                        </div>
                    </div>
                    <div class="tab__panel-box tab__panel-box002" data-panel="02">
                        <div class="card mt-4 py-5 px-5 border-0 shadow-sm">
                            <form action="{{ route('calendars.home') }}" class="form text-start">
                            @csrf 

                                <!-- Title -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2">
                                    <label for="title" class="form-label h5 fw-bold color-Letter">Date</label>
                                    <input type="text" class="font-end ms-auto ps-auto pe-0 me-0 mb-2 border-0 text-end" name="title" placeholder="Name...">
                                </div>

                                <!-- Budget -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2 pt-4">
                                    <label for="title" class="form-label h5 fw-bold color-Letter">Price</label>
                                    <input type="text" class="font-end ms-auto ps-auto pe-0 me-0 mb-2 border-0 text-end" name="title" placeholder="0">
                                </div>

                                <!-- Category -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2 pt-4 position-relative">
                                    <label for="title" class="category form-label h5 fw-bold color-Letter">Category</label>
                                    <input type="text" class="font-end ms-auto ps-auto pe-0 me-0 mb-2 border-0 text-end" value="something"/>
                                </div>
                                <!-- absoluto -->
                                

                                <!-- Person -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2 pt-4">
                                    <label for="title" class="form-label h5 fw-bold color-Letter">Person</label>
                                    <input type="text" class="font-end ms-auto ps-auto pe-0 me-0 border-0 text-end" name="title" placeholder="Name..." value="sun">
                                </div>

                                <!-- Memo -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2 pt-4">
                                    <label for="title" class="form-label h5 fw-bold color-Letter">Memo</label>
                                    <input type="text" class="font-end ms-auto ps-auto pe-0 me-0 border-0 text-end" name="title">
                                </div>

                            
                                <a href="#" class="btn btn-main btn-lg px-5 mt-5 w-100">
                                    <span class="pt-1 fw-bold">Save</span>
                                </a>

                            </form>
                        </div>
                    </div>
                    <div class="tab__panel-box tab__panel-box003" data-panel="03">
                        <div class="card mt-4 py-5 px-5 border-0 shadow-sm">
                            <form action="{{ route('calendars.home') }}" class="form text-start">
                            @csrf 

                                <!-- Due Date -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2">
                                    <label for="title" class="form-label h5 fw-bold color-Letter">Due Date</label>
                                    <input type="text" class="font-end ms-auto ps-auto pe-0 me-0 mb-2 border-0 text-end" name="title" placeholder="Name...">
                                </div>

                                <!-- Bill -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2 pt-4">
                                    <label for="title" class="form-label h5 fw-bold color-Letter">Bill</label>
                                    <input type="text" class="font-end ms-auto ps-auto pe-0 me-0 mb-2 border-0 text-end" name="title" placeholder="0">
                                </div>

                                <!-- Category -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2 pt-4 position-relative">
                                    <label for="title" class="category form-label h5 fw-bold color-Letter">Category</label>
                                    <input type="text" class="font-end ms-auto ps-auto pe-0 me-0 mb-2 border-0 text-end" value="something"/>
                                </div>
                                <!-- absoluto -->
                                

                                <!-- Person -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2 pt-4">
                                    <label for="title" class="form-label h5 fw-bold color-Letter">Person</label>
                                    <input type="text" class="font-end ms-auto ps-auto pe-0 me-0 border-0 text-end" name="title" placeholder="Name..." value="sun">
                                </div>

                                <!-- Title -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2 pt-4">
                                    <label for="title" class="form-label h5 fw-bold color-Letter">Title</label>
                                    <input type="text" class="font-end ms-auto ps-auto pe-0 me-0 border-0 text-end" name="title" placeholder="Name..." value="sun">
                                </div>

                                <!-- Description -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2 pt-4">
                                    <label for="title" class="form-label h5 fw-bold color-Letter">Description</label>
                                    <input type="text" class="font-end ms-auto ps-auto pe-0 me-0 border-0 text-end" name="title">
                                </div>

                                <a href="#" class="btn btn-main btn-lg px-5 mt-5 w-100">
                                    <span class="pt-1 fw-bold">Save</span>
                                </a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /tab -->

            </div>

        </div>

    </section>

    </article>
</main>
@endsection