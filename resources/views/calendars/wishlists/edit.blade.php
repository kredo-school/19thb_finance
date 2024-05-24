@extends('layouts.app')

@section('title', 'wish | update')

@section('content')
<main class="row container mx-auto">
    <aside class="col-auto">@include('components.sidebar')</aside>
    <article class="col-9 mt-4">
        <section class="container text-center" id="wish_new">
            <div class="col card-wrapper mt-4 mx-auto">

                <div class="card-wrapper mx-auto" style="max-width: 500px;">
                    <h2 class="lh-1 fw-bold">Edit Wish</h2>
                    <div class="bg-color-Rainbow mx-auto" style="width: 50px; height: 2px;"></div>

                    <div class="card mt-4 py-5 px-5 border-0 shadow-sm">
                        <form method="POST" action="{{ route('calendars.wishlists.update', $wishlist) }}" class="text-start">
                            @csrf
                            @method('PATCH')
                            <!-- Title -->
                            <div class="COMP-form input-group border-bottom px-3 pb-2">
                                <label for="title" class="form-label h5 fw-bold color-Letter">Title</label>
                                <input type="text" class="font-end ms-auto ps-auto pe-0 me-0 border-0 text-end" name="title" id="title" value="{{ old('title', $wishlist->title) }}" placeholder="Name...">
                            </div>

                            <!-- Budget -->
                            <div class="COMP-form input-group border-bottom px-3 pb-2 pt-4">
                                <label for="budget" class="form-label h5 fw-bold color-Letter">Budget</label>
                                <input type="text" class="font-end ms-auto ps-auto pe-0 me-0 border-0 text-end" name="budget" id="budget" value="{{ old('budget', $wishlist->budget) }}" placeholder="0">
                                <div class="h5 fw-bold color-Letter ms-2">yen</div>
                            </div>

                            <div class="row align-items-center mt-5 mx-0">
                                <button type="submit" class="btn btn-main col-10 btn btn-main btn-lg px-5">
                                    <span class="pt-1 fw-bold">Update Wish</span>
                                </button>   
                            </div>
                        </form>

                        <form method="POST" action="{{ route('calendars.wishlists.destroy', $wishlist) }}" class="text-end">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn col-2 text-center">
                                <i class="fa-solid fa-trash-can color2 fa-2x"></i>
                            </button>
                        </form>

                        
                        
                        <!-- <div class="row">
                            <p class="fs-6 fw-bold color-Muted mb-0">Company Name</p>

                            <div class="col-md-11 offset-md-1">
                                <p class="fs-6 fw-bold">Cute Pig</p>
                            </div>
                        </div> -->

                    </div>
                </div>

                <div class="achivement_list">
                    <h2 class="lh-1 fw-bold">Achievement List</h2>
                    <div class="bg-color-Rainbow mx-auto" style="width: 50px; height: 2px;"></div>

                    <div class="table-wrapper bg-color-Rainbow mt-4 mb-5 mx-auto p-1" style="width: 650px;">
                        <table class="bg-color-Rainbow mx-auto" style="width: 100%;">
                            <thead>
                                <th class="t1" style="width: 50%;">Title</th>
                                <th class="t1">Budget</th>
                                <th>Date</th>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="t1" style="width: 50%;">new Nike shoes</td>
                                    <td class="t1">35,000円</td>
                                    <td>2024/3/27</td>
                                </tr>
                                <tr>
                                    <td class="t1" style="width: 50%;">Macbook Pro 2024 M3 new model</td>
                                    <td class="t1">424,500円</td>
                                    <td>2024/2/12</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>
    </article>
</main>
@endsection