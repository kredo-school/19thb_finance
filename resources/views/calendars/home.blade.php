@extends('layouts.app')

@section('content')
<main class="row container mx-auto">
    <aside class="col-auto" style="min-height: calc(100vh - 160px); background-color: #FFE4D6;">@include('components.sidebar')</aside>
    <article class="col-9 mt-4">

        <div class="row mx-auto">

            <!-- Calendar -->
            <div class="col-8 Calendar text-center">
                <h2>May</h2>
                <div class="card shadow">
                    <!-- <div class="card-header">{{ $calendar->getTitle() }}</div> -->
                    <div class="card-body">
                            {!! $calendar->render() !!}
                    </div>
                </div>
            </div>

            <!-- Detail of Calendar -->
            <div class="col-4 detail_lalendar mt-5">
                <div class="overflow-y-scroll shadow" style="height: 500px;">

                    <div class="card rounded-0 border-0">
                        <div class="card-header bg-color3 rounded-0">
                            15th (Mon)
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex border-bottom p-2">

                                <!-- Icon -->
                                <div class="icon-sm me-2">
                                    <img src="{{ asset('images/icon_meal.svg') }}" class="object-contain" alt="">
                                </div>

                                <!-- Ctegory -->
                                <p class="ms-2 mb-0">Cafe</p>

                                <!-- Cost -->
                                <p class="text-danger ms-auto mb-0">-670yen</p>
                            </div>
                            
                            <div class="card-text d-flex p-2">

                                <!-- Icon -->
                                <div class="icon-sm me-2">
                                    <img src="{{ asset('images/icon_train.svg') }}" class="object-contain" alt="">
                                </div>

                                <!-- Ctegory -->
                                <p class="ms-2 mb-0">Taxi</p>

                                <!-- Cost -->
                                <p class="text-danger ms-auto mb-0">-530yen</p>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-0 border-0">
                        <div class="card-header bg-color3 rounded-0">
                            14th (Sun)
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex border-bottom p-2">

                                <!-- Icon -->
                                <div class="icon-sm me-2">
                                    <img src="{{ asset('images/icon_meal.svg') }}" class="object-contain" alt="">
                                </div>

                                <!-- Ctegory -->
                                <p class="ms-2 mb-0">Cafe</p>

                                <!-- Cost -->
                                <p class="text-danger ms-auto mb-0">-670yen</p>
                            </div>
                            
                            <div class="card-text d-flex p-2">

                                <!-- Icon -->
                                <div class="icon-sm me-2">
                                    <img src="{{ asset('images/icon_train.svg') }}" class="object-contain" alt="">
                                </div>

                                <!-- Ctegory -->
                                <p class="ms-2 mb-0">Taxi</p>

                                <!-- Cost -->
                                <p class="text-danger ms-auto mb-0">-530yen</p>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-0 border-0">
                        <div class="card-header bg-color3 rounded-0">
                            13th (Sat)
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex border-bottom p-2">

                                <!-- Icon -->
                                <div class="icon-sm me-2">
                                    <img src="{{ asset('images/icon_meal.svg') }}" class="object-contain" alt="">
                                </div>

                                <!-- Ctegory -->
                                <p class="ms-2 mb-0">Cafe</p>

                                <!-- Cost -->
                                <p class="text-danger ms-auto mb-0">-670yen</p>
                            </div>
                            
                            <div class="card-text d-flex p-2">

                                <!-- Icon -->
                                <div class="icon-sm me-2">
                                    <img src="{{ asset('images/icon_train.svg') }}" class="object-contain" alt="">
                                </div>

                                <!-- Ctegory -->
                                <p class="ms-2 mb-0">Taxi</p>

                                <!-- Cost -->
                                <p class="text-danger ms-auto mb-0">-530yen</p>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-0 border-0">
                        <div class="card-header bg-color3 rounded-0">
                            12th (Fri)
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex border-bottom p-2">

                                <!-- Icon -->
                                <div class="icon-sm me-2">
                                    <img src="{{ asset('images/icon_meal.svg') }}" class="object-contain" alt="">
                                </div>

                                <!-- Ctegory -->
                                <p class="ms-2 mb-0">Cafe</p>

                                <!-- Cost -->
                                <p class="text-danger ms-auto mb-0">-670yen</p>
                            </div>
                            
                            <div class="card-text d-flex p-2">

                                <!-- Icon -->
                                <div class="icon-sm me-2">
                                    <img src="{{ asset('images/icon_train.svg') }}" class="object-contain" alt="">
                                </div>

                                <!-- Ctegory -->
                                <p class="ms-2 mb-0">Taxi</p>

                                <!-- Cost -->
                                <p class="text-danger ms-auto mb-0">-530yen</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <div class="row mx-auto my-4">

            <!-- Wish -->
            <div class="col show text-center" style="height: 100px;">
                <a href="{{ route('calendars.wishlists.new') }}" class="btn btn-main btn-lg px-5 d-flex justify-content-center align-items-center">
                    
                    <!-- icon -->
                    <div class="icon-in-btn me-2">
                        <img src="{{ asset('images/icon_plus.svg') }}" alt="">
                    </div>

                    <!-- title -->
                    <span class="pt-1">Set my wish</span>
                    
                </a>
                <p>you can create your own wish.</p>
            </div>

            <!-- Lists -->
            <div class="col list">
                <div class="accordion shadow-sm rounded rounded-4" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Shopping List
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>sample</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion shadow-sm mt-2" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                            Memo List
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>sample</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </article>
</main>
@endsection
