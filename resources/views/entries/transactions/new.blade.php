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
                            <form action="{{ route('calendars.home') }}" class="form text-start">
                            @csrf 

                                <!-- Title -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2">
                                    <label for="title" class="form-label h5 fw-bold color-Letter">Date</label>
                                    <input type="date" class="font-end ms-auto ps-auto pe-0 me-0 mb-2 border-0 text-end" name="title" placeholder="Name...">
                                </div>

                                <!-- Budget -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2 pt-4">
                                    <label for="title" class="form-label h5 fw-bold color-Letter">Price</label>
                                    <input type="number" class="font-end ms-auto ps-auto pe-0 me-0 mb-2 border-0 text-end" name="title" placeholder="0">
                                </div>

                                <!-- Category -->
                                <div class="COMP-form input-group border-bottom px-3 pb-2 pt-4 position-relative">
                                    <label for="title" class="category form-label h5 fw-bold color-Letter">Category</label>
                                    <input type="text" class="font-end ms-auto ps-auto pe-0 me-0 mb-2 border-0 text-end" id='selected' value="something"/>
                            
                                    <!-- parent_category -->
                                    <div id="category_parent" class="hidden position-absolute text-center">
                                        <div class="position-relative">
                                            <strong>Category</strong>
                                            <hr>
                                            <ul class="tab d-flex justify-content-evenly">
                                                <li class="d-flex flex-item p-2">
                                                    <div class="category-icon">
                                                        <img src="{{ asset('images/icon_meal.svg') }}" class="object-contain svg-DF5656" alt="">
                                                    </div>
                                                    <p id="open" data-id='Meal' class="m-0">
                                                        <a href="#Meal" class="text-decoration-none color-DF5656">Meal</a>
                                                    </p>
                                                </li>

                                                <li class="d-flex flex-item p-2">
                                                    <div class="category-icon">
                                                        <img src="{{ asset('images/icon_meal.svg') }}" class="object-contain svg-0FA3B1" alt="Daily">
                                                    </div>
                                                    <p id="open" data-id='Daily' class="m-0">
                                                        <a href="#Daily" class="text-decoration-none color-0FA3B1">Daily</a>
                                                    </p>
                                                </li>

                                                <li class="d-flex flex-item p-2">
                                                    <div class="category-icon">
                                                        <img src="{{ asset('images/icon_meal.svg') }}" class="object-contain svg-939292" alt="Close">
                                                    </div>
                                                    <p class="color-939292" data-id='Close' class="m-0">Close</p>
                                                </li>
                                            </ul>

                                            <div class="d-flex justify-content-evenly">
                                                <div class="d-flex flex-item p-2">
                                                    <div class="category-icon">
                                                        <img src="{{ asset('images/icon_meal.svg') }}" class="object-contain svg-F34AE2" alt="">
                                                    </div>
                                                    <p class="color-F34AE2" data-id='Beauty'>Beauty</p>
                                                </div>

                                                <div class="d-flex flex-item p-2">
                                                    <div class="category-icon">
                                                        <img src="{{ asset('images/icon_meal.svg') }}" class="object-contain svg-FFD700" alt="Hang out">
                                                    </div>
                                                    <p class="color-FFD700" data-id='Hang out'>Hang out</p>
                                                </div>
                                                
                                                <div class="d-flex flex-item p-2">
                                                    <div class="category-icon">
                                                        <img src="{{ asset('images/icon_meal.svg') }}" class="object-contain svg-92DF56" alt="">
                                                    </div>
                                                    <p class="color-92DF56" data-id='Rent' data-num='1'>Rent</p>
                                                </div>
                                            </div>

                                            <!-- child_category | Meal -->
                                            <div id="Meal" class="area child_category position-absolute text-center">
                                                <div class="fukidashi_child position-relative">
                                                    <div class="d-flex flex-item justify-content-center">
                                                        <div class="category-icon">
                                                            <img src="{{ asset('images/icon_meal.svg') }}" class="object-contain svg-DF5656" alt="">
                                                        </div>
                                                        <p id="child" data-id='Meal' class="m-0">
                                                            Meal
                                                        </p>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-evenly">
                                                        <p data-id='cafe' onclick="updateSelected(this)">cafe</p>
                                                        <p data-id='restaurant' onclick="updateSelected(this)">restaurant</p>
                                                        <p data-id='dinner' onclick="updateSelected(this)">dinner</p>
                                                    </div>
                                                    <div class="d-flex justify-content-evenly">
                                                        <p data-id='breakfast' onclick="updateSelected(this)">breakfast</p>
                                                        <p data-id='restaurant' onclick="updateSelected(this)">lunch</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- child_category | Daily -->
                                            <div id="Daily" class="area child_category position-absolute text-center">
                                                <div class="fukidashi_child position-relative">
                                                    <strong id="child">Daily</strong>
                                                    <hr>
                                                    <div class="d-flex justify-content-evenly">
                                                        <p data-id='juice' onclick="updateSelected(this)">juice</p>
                                                        <p data-id='snack' onclick="updateSelected(this)">snack</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

                            
                                <a href="{{ route('calendars.home') }}" class="btn btn-main btn-lg px-5 mt-5 w-100">
                                    <span class="pt-1 fw-bold">Save</span>
                                </a>

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