@extends('layouts.app')

@section('title', 'wish | show')

@section('content')
<main class="row container mx-auto">
    <aside class="col-auto" style="min-height: calc(100vh - 160px); background-color: #FFE4D6;">@include('components.sidebar')</aside>
    <article class="col-9 mt-4">
<section class="container text-center" id="wish">
    <div class="col card-wrapper mt-4 mx-auto">

        <div class="card-wrapper mx-auto" style="max-width: 500px;">
            <h2 class="lh-1 fw-bold">Wish</h2>
            <div class="bg-color-Rainbow mx-auto" style="width: 50px; height: 2px;"></div>

            <div class="card mt-4 py-5 px-5 border-0 shadow-sm">
                @foreach ($wishlists as $wishlist)
                <!-- Title -->
                <div class="content p-3 position-relative">
                    <div>
                        <p class="h5 fw-bold color-Muted text-start">Title</p>
                        <p class="h4 fw-bold">{{ $wishlist->title }}</p>
                    </div>

                    <a href="{{ route('calendars.wishlists.edit') }}" class="position-absolute btn-main-reverse px-3 text-decoration-none">edit</a>
                </div>

                <!-- Budget -->
                <div class="content pt-0 pb-4 px-3">
                    <div>
                        <p class="h5 fw-bold color-Muted text-start">Budget</p>
                        <p class="h4 fw-bold">{{ $wishlist->budget }} yen</p>
                    </div>
                </div>

                <a href="" class="btn btn-main btn-lg px-5 d-flex justify-content-center align-items-center">
                    <div class="icon-in-btn me-3">
                        <img src="{{ asset('images/icon_diamond.svg') }}" alt="">
                    </div>
                    <span class="pt-1 fw-bold">Complete</span>
                    <div class="icon-in-btn ms-3">
                        <img src="{{ asset('images/icon_diamond.svg') }}" alt="">
                    </div>
                </a>
                @endforeach
                
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
                <table class="mx-auto" style="width: 100%;">
                    <thead>
                        <th class="t1" style="width: 50%;">Title<strong class="t2"></strong></th>
                        <th class="t1">Budge<strong class="t2"></strong></th>
                        <th>Date</th>
                    </thead>
                    <tbody class="bg-white">
                        <tr>
                            <td class="t1" style="width: 50%;">new Nike shoes<strong class="t2"></strong></td>
                            <td class="t1">35,000yen<strong class="t2"></strong></td>
                            <td>2024/3/27</td>
                        </tr>
                        <tr>
                            <td class="t1" style="width: 50%;">Macbook Pro 2024<br> M3 new model<strong class="t2"></strong></td>
                            <td class="t1">424,500yen<strong class="t2"></strong></td>
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