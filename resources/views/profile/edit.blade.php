@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4 m-5">
            <h3 class="text-center mb-5" style="text-underline-offset: 0.5em; text-decoration-line: underline; text-decoration-color: #F7A072">Profile</h3>
            <form action="#" method="post">
                @csrf
                <div class="row">
                    <div class="col-7">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control mb-3" id="name">
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-circle-user ps-3" style="font-size: 5rem"></i>
                    </div>
                </div>
                <label for="icon_color" class="form-label">Icon Color</label>
                <select name="icon_color" id="icon_color" class="form-select w-25 mb-3">
                    {{-- TODO: Icon Color --}}
                    <option value="">◯</option>
                    <option value="">◯</option>
                    <option value="">◯</option>
                    <option value="">◯</option>
                </select>
                <label for="name" class="form-label">Mail</label>
                <input type="email" class="form-control mb-5" value="Money-Juuco@gmail.com">
                <button type="submit" class="btn rounded-pill text-white fw-bold w-100 bg-color4 mb-4">Update</button>
            </form>
            <div class="row">
                <div class="col text-center">
                    <a href="#" class="fw-bold" style="color: #F7A072">Change Password</a>
                </div>
                <div class="col text-center">
                    <button class="btn fw-bold text-danger text-decoration-underline p-0" data-bs-toggle="modal" data-bs-target="#delete-account">Delete Account</button>
                </div>
                @include('profile.modal.delete')
            </div>
        </div>
        <div class="col-3 m-5">
            <h3 class="text-center mb-5" style="text-underline-offset: 0.5em; text-decoration-line: underline; text-decoration-color: #F7A072">Change Password</h3>
            <form action="#" method="post">
                @csrf
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control mb-3" id="password">

                <label for="new-password" class="form-label">New Password</label>
                <input type="password" class="form-control mb-3" id="new-password">

                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control mb-5" id="confirm-password">

                <button type="submit" class="btn rounded-pill text-white fw-bold w-100 bg-color4">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
