@extends('layouts.app')

@section('content')
<main class="row container mx-auto">
    <aside class="col-auto" style="min-height: calc(100vh - 160px); background-color: #FFE4D6;">
        @include('components.sidebar')
    </aside>
        <article class="col mt-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-8 m-5 px-0">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <h3 class="text-center">Profile</h3>
                                <div class="bg-color-Rainbow mx-auto mb-5" style="width: 50px; height: 2px;"></div>      
                            </div>
                            <div class="col text-center">
                                {{-- TODO: CSS Color --}}
                                <a href="{{ route('profile.edit') }}" class="text-decoration-none btn btn-sm btn-outline-warning rounded-pill px-3 py-0">edit</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <h6 class="text-secondary text-decoration-underline">Name</h6>
                                <p class="fw-bold ps-3">{{$user->name}}</p>
                            </div>
                            <div class="col">
                                <i class="fa-solid fa-circle-user" style="font-size: 5rem ; color: #{{ $user->icon_color_hex }};"></i>
                            </div>
                        </div>
            
                        <h6 class="text-secondary text-decoration-underline">Mail</h6>
                        <p class="fw-bold ps-3">{{$user->email}}</p>
            
                        <h6 class="text-secondary text-decoration-underline mt-4">Subscription</h6>
                        <p class="fw-bold ps-3 mb-0">Premium member</p>
                        <p class="small ps-3">2024/3/23~2025/3/22</p>
                    </div>
                    <div class="col-lg-4 col-md-8 m-5">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <h3 class="text-center">People</h3>
                                <div class="bg-color-Rainbow mx-auto mb-5" style="width: 50px; height: 2px;"></div>      
                            </div>
                            <div class="col text-center">
                                <a href="{{ route('people.show')}}" class="text-decoration-none btn btn-sm btn-outline-warning rounded-pill px-3 py-0">edit</a>
                            </div>
                        </div>
                        <div class="card bg-light border-0">
                            <div class="card-body bg-white rounded-4 p-4">
                                <table class="table table-borderless">
                                    @foreach ($user->people as $people)                                  
                                    <tr>
                                        <td class="text-center bg-white">
                                            <i class="fa-solid fa-circle-user" style="font-size: 3.5rem; color: #{{ $people->color_hex }};"></i>
                                        </td>
                                        <td class="fw-bold align-middle bg-white">{{ $people->name }}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
</main>

@endsection