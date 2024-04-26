@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4 m-5">
            <h3 class="text-center mb-5" style="text-underline-offset: 0.5em; text-decoration-line: underline; text-decoration-color: #F7A072">People</h3>
            <div class="row justify-content-center">
                <table class="table table-borderless" style="width: 300px;">
                    <tr>
                        <td style="background-color: #F7F3EB">
                            <i class="fa-solid fa-circle-user" style="font-size: 3.5rem"></i>
                        </td>
                        <td class="fw-bold align-middle" style="background-color: #F7F3EB">Money Juuco</td>
                        <td class="align-middle"  style="background-color: #F7F3EB">
                            {{-- TODO: Add LINK --}}
                            <i class="fa-solid fa-pen"></i>
                            &nbsp;
                            <i class="fa-solid fa-trash-can"></i>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #F7F3EB">
                            <i class="fa-solid fa-circle-user" style="font-size: 3.5rem"></i>
                        </td>
                        <td class="fw-bold align-middle" style="background-color: #F7F3EB">Money Juo</td>
                        <td class="align-middle" style="background-color: #F7F3EB">
                            <i class="fa-solid fa-pen"></i>
                            &nbsp;
                            <i class="fa-solid fa-trash-can"></i>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #F7F3EB">
                            <i class="fa-solid fa-circle-user" style="font-size: 3.5rem"></i>
                        </td>
                        <td class="fw-bold align-middle" style="background-color: #F7F3EB">Son</td>
                        <td class="align-middle" style="background-color: #F7F3EB">
                            <i class="fa-solid fa-pen"></i>
                            &nbsp;
                            <i class="fa-solid fa-trash-can"></i>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #F7F3EB">
                            <i class="fa-solid fa-circle-user" style="font-size: 3.5rem"></i>
                        </td>
                        <td class="fw-bold align-middle" style="background-color: #F7F3EB">Daughter</td>
                        <td class="align-middle" style="background-color: #F7F3EB">
                            <i class="fa-solid fa-pen"></i>
                            &nbsp;
                            <i class="fa-solid fa-trash-can"></i>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="background-color: #F7F3EB">
                            <button type="button" class="btn rounded-pill text-white fw-bold w-100 mt-4 bg-color4">
                                <i class="fa-solid fa-circle-plus me-1"></i> Add
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-3 m-5">
            <h3 class="text-center mb-5" style="text-underline-offset: 0.5em; text-decoration-line: underline; text-decoration-color: #F7A072">Add People</h3>
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
                <select name="icon_color" id="icon_color" class="form-select w-25 mb-5">
                    {{-- TODO: Icon Color --}}
                    <option value="">◯</option>
                    <option value="">◯</option>
                    <option value="">◯</option>
                    <option value="">◯</option>
                </select>

                <button type="submit" class="btn rounded-pill text-white fw-bold w-100 bg-color4">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
