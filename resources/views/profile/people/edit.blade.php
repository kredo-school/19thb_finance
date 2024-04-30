@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4 m-5">
            <h3 class="text-center">People</h3>
            <div class="bg-color-Rainbow mx-auto mb-5" style="width: 50px; height: 2px;"></div>

            <div class="row justify-content-center">
                <table class="table table-borderless" style="width: 300px;">
                    <tr>
                        <td style="background-color: #F7F3EB">
                            <i class="fa-solid fa-circle-user" style="font-size: 3.5rem; color: #FE6D73;"></i>
                        </td>
                        <td class="fw-bold align-middle" style="background-color: #F7F3EB">Money Juuco</td>
                        <td class="align-middle"  style="background-color: #F7F3EB">
                            {{-- TODO: ICON COLOR --}}
                            <button type="button" id="editButton" class="btn p-0 me-1" title="Edit">
                                <i class="fa-solid fa-pen text-secondary"></i>
                            </button>
                            <button class="btn p-0" title="Delete">
                                <i class="fa-solid fa-trash-can text-secondary"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #F7F3EB">
                            <i class="fa-solid fa-circle-user" style="font-size: 3.5rem; color: #227C9D;"></i>
                        </td>
                        <td class="fw-bold align-middle" style="background-color: #F7F3EB">Money Juo</td>
                        <td class="align-middle" style="background-color: #F7F3EB">
                            <button type="button" id="editButton" class="btn p-0 me-1" title="Edit">
                                <i class="fa-solid fa-pen text-secondary"></i>
                            </button>
                            <button class="btn p-0" title="Delete">
                                <i class="fa-solid fa-trash-can text-secondary"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #F7F3EB">
                            <i class="fa-solid fa-circle-user" style="font-size: 3.5rem; color: #0FA3B1;"></i>
                        </td>
                        <td class="fw-bold align-middle" style="background-color: #F7F3EB">Son</td>
                        <td class="align-middle" style="background-color: #F7F3EB">
                            <button type="button" id="editButton" class="btn p-0 me-1" title="Edit">
                                <i class="fa-solid fa-pen text-secondary"></i>
                            </button>
                            <button class="btn p-0" title="Delete">
                                <i class="fa-solid fa-trash-can text-secondary"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #F7F3EB">
                            <i class="fa-solid fa-circle-user" style="font-size: 3.5rem; color: #F7A072;"></i>
                        </td>
                        <td class="fw-bold align-middle" style="background-color: #F7F3EB">Daughter</td>
                        <td class="align-middle" style="background-color: #F7F3EB">
                            <button type="button" id="editButton" class="btn p-0 me-1" title="Edit">
                                <i class="fa-solid fa-pen text-secondary"></i>
                            </button>
                            <button class="btn p-0" title="Delete">
                                <i class="fa-solid fa-trash-can text-secondary"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="background-color: #F7F3EB">
                            {{-- TODO: BUTTON DESIGN --}}
                            <button type="button" id="addButton" class="btn rounded-pill text-white fw-bold w-100 mt-4 bg-color4">
                                <i class="fa-solid fa-circle-plus me-1"></i> Add
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-3 m-5">
            <div id="addPeople" style="display: none" class="mb-5">
                <h3 class="text-center">Add People</h3>
                <div class="bg-color-Rainbow mx-auto mb-5" style="width: 50px; height: 2px;"></div>

                <form action="#" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-7">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control mb-3" id="name">
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-circle-user ps-3 icon-color" style="font-size: 5rem; color: #FE6D73;"></i>
                        </div>
                    </div>
                    <label for="icon_color" class="form-label">Icon Color</label>
                    <select name="icon_color" id="icon_color" class="form-select w-25 mb-3" onchange="changeColor(this)">
                        <option value="#FE6D73">Pink</option>
                        <option value="#227C9D">Blue</option>
                        <option value="#0FA3B1">Green</option>
                        <option value="#F7A072">Orange</option>
                        <option value="#FFD70A">Yellow</option>
                    </select>

                    <button type="submit" class="btn rounded-pill text-white fw-bold w-100 bg-color4">Save</button>
                </form>
            </div>
            <div id="editPeople" style="display: none">
                <h3 class="text-center">Edit People</h3>
                <div class="bg-color-Rainbow mx-auto mb-5" style="width: 50px; height: 2px;"></div>

                <form action="#" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-7">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control mb-3" id="name" value="Money Juuco">
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-circle-user ps-3 icon-color-edit" style="font-size: 5rem; color: #FE6D73;"></i>
                        </div>
                    </div>
                    <label for="icon_color" class="form-label">Icon Color</label>
                    <select name="icon_color" id="icon_color" class="form-select w-25 mb-3" onchange="updateColor(this)">
                        <option value="#FE6D73">Pink</option>
                        <option value="#227C9D">Blue</option>
                        <option value="#0FA3B1">Green</option>
                        <option value="#F7A072">Orange</option>
                        <option value="#FFD70A">Yellow</option>
                    </select>

                    <button type="submit" class="btn rounded-pill text-white fw-bold w-100 bg-color4">Update</button>
                </form>
            </div>           
        </div>
    </div>
</div>

<script src="{{ asset('js/people-edit.js') }}"></script>

@endsection
