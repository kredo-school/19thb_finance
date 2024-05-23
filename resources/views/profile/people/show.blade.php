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
                    <h3 class="text-center">People</h3>
                    <div class="bg-color-Rainbow mx-auto mb-5" style="width: 50px; height: 2px;"></div>
        
                    <div class="row justify-content-center">
                        <table class="table table-borderless">
                            @foreach ($user->people as $people)
                                <tr>
                                    <td style="background-color: #F7F3EB">
                                        <i class="fa-solid fa-circle-user" style="font-size: 3.5rem; color: #{{ $people->color_hex }};"></i>
                                    </td>
                                    <td class="fw-bold align-middle" style="background-color: #F7F3EB">{{ $people->name }}</td>
                                    <td class="align-middle text-end"  style="background-color: #F7F3EB">
                                        <button type="button" class="btn rounded-3 px-2 py-1 text-secondary edit-button" title="Edit" data-people-id="{{ $people->id }}">
                                            <i class="fa-solid fa-pen fs-5"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3" style="background-color: #F7F3EB">
                                    <button type="button" id="addButton" class="btn w-100 mt-4 btn-main">
                                        <i class="fa-solid fa-circle-plus me-1"></i> Add
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 m-5">
                    <div class="addPeople" style="display: none;" class="mb-5">
                        <h3 class="text-center">Add People</h3>
                        <div class="bg-color-Rainbow mx-auto mb-5" style="width: 50px; height: 2px;"></div>
        
                        <form action="{{ route('people.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-7">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control pe-0" id="name" name="name">
                                    @error('name')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-circle-user my-2 ps-3 icon-color" style="font-size: 5rem; color: #FE6D73;"></i>
                                </div>
                            </div>
                            <label for="color_hex" class="form-label">Icon Color</label>
                            <select name="color_hex" id="color_hex" class="form-select pe-0 w-50" onchange="changeColor(this)">
                                <option value="FE6D73">Pink</option>
                                <option value="227C9D">Blue</option>
                                <option value="0FA3B1">Green</option>
                                <option value="F7A072">Orange</option>
                                <option value="FFD70A">Yellow</option>
                            </select>
                            @error('color_hex')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            <button type="submit" class="btn w-100 btn-main mt-5">Save</button>
                        </form>
                    </div>
                    <div class="editPeople" style="display: none;">
                        <h3 class="text-center">Edit People</h3>
                        <div class="bg-color-Rainbow mx-auto mb-5" style="width: 50px; height: 2px;"></div>
        
                        <form action="{{ route('people.update', $people->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-lg-7">
                                    <label for="name_edit" class="form-label">Name</label>
                                    <input type="text" class="form-control pe-0" id="name_edit" name="name" value="{{ $people->name }}">
                                    @error('name')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-circle-user my-2 ps-3 icon-color-edit" style="font-size: 5rem; color: #FE6D73;"></i>
                                </div>
                            </div>
                            <label for="color_hex_edit" class="form-label">Icon Color</label>
                            <select name="color_hex" id="color_hex_edit" class="form-select w-50" onchange="updateColor(this)">
                                <option value="FE6D73">Pink</option>
                                <option value="227C9D">Blue</option>
                                <option value="0FA3B1">Green</option>
                                <option value="F7A072">Orange</option>
                                <option value="FFD70A">Yellow</option>
                            </select>
                            @error('color_hex')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            <button type="submit" class="btn w-100 mt-5 btn-main">Update</button>
                        </form>
                        <div class="text-end mt-3 mb-4">
                            @if ( count($user->people) > 1 )
                                <form action="{{ route('people.destroy', $people->id) }}" method="post" class="m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn p-0" title="Delete">
                                        <i class="fa-solid fa-trash-can fs-4 text-secondary"></i>
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>           
                </div>
            </div>
        </div>
    </article>
</main>

<script>
    function changeColor(selectElement){
        var selectedColor = '#' + selectElement.value;
        var iconElement = document.querySelector('.icon-color');
        iconElement.style.color = selectedColor;
    }    

    function updateColor(selectElement){
        var selectedColor = '#' + selectElement.value;
        var iconElement = document.querySelector('.icon-color-edit');
        iconElement.style.color = selectedColor;
    }
</script>

@endsection
