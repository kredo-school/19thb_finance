@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3 m-5">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <h3 class="text-center" style="text-underline-offset: 0.5em; text-decoration-line: underline; text-decoration-color: #F7A072">Profile</h3>
                </div>
                <div class="col mt-auto text-center">
                    {{-- TODO: CSS Color --}}
                    <a href="{{ route('profile.edit') }}" class="text-decoration-none btn btn-sm btn-outline-warning rounded-pill px-3 py-0">edit</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-8">
                    <h6 class="text-secondary text-decoration-underline">Name</h6>
                    <p class="fw-bold ps-3">Money Juuco</p>
                </div>
                <div class="col">
                    <i class="fa-solid fa-circle-user" style="font-size: 5rem"></i>
                </div>
            </div>

            <h6 class="text-secondary text-decoration-underline">Mail</h6>
            <p class="fw-bold ps-3">money-juu@gmail.com</p>

            <h6 class="text-secondary text-decoration-underline">Subscription</h6>
            <p class="fw-bold ps-3 mb-0">Premium member</p>
            <p class="small ps-3">2024/3/23~2025/3/22</p>
            
            <h6 class="text-secondary text-decoration-underline">First transaction date</h6>
            <p class="fw-bold ps-3">2024/3/9</p>
        </div>
        <div class="col-3 m-5">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <h3 class="text-center" style="text-underline-offset: 0.5em; text-decoration-line: underline; text-decoration-color: #F7A072">People</h3>
                </div>
                <div class="col mt-auto text-center">
                    <a href="#" class="text-decoration-none btn btn-sm btn-outline-warning rounded-pill px-3 py-0">edit</a>
                </div>
            </div>
            <div class="card bg-light border-0 mt-4">
                <div class="card-body bg-white rounded-4 p-4">
                    <table class="table table-borderless">
                        <tr>
                            <td class="text-center bg-white">
                                <i class="fa-solid fa-circle-user" style="font-size: 3.5rem"></i>
                            </td>
                            <td class="fw-bold align-middle bg-white">Money Juuco</td>
                        </tr>
                        <tr>
                            <td class="text-center bg-white">
                                <i class="fa-solid fa-circle-user" style="font-size: 3.5rem"></i>
                            </td>
                            <td class="fw-bold align-middle bg-white">Money Juo</td>
                        </tr>
                        <tr>
                            <td class="text-center bg-white">
                                <i class="fa-solid fa-circle-user" style="font-size: 3.5rem"></i>
                            </td>
                            <td class="fw-bold align-middle bg-white">Son</td>
                        </tr>
                        <tr>
                            <td class="text-center bg-white">
                                <i class="fa-solid fa-circle-user" style="font-size: 3.5rem"></i>
                            </td>
                            <td class="fw-bold align-middle bg-white">Daughter</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection