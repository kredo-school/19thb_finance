<div class="modal" id="delete-parent_category-{{$parent_category->id}}">
    <div class="modal-dialog">
        <div class="modal-content border-danger">
            <div class="modal-header border-danger">
                <h3 class="h5 modal-title text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i> Delete Category
                </h3>
            </div>
            <div class="modal-body">
                <p class="text-center">Are you sure you want to delete this <span class="fw-bold text-decoration-underline">Parent</span> Category?</p>
            <div class="mt-3">
                <div class="d-flex justify-content-center" style="color: #{{ $parent_category->color_hex }};">
                    <img src="{{ asset('images/category-icon/' . $parent_category->icon_path . '.svg') }}" alt="{{ $parent_category->icon_path }}" width="25px" class="me-1 filter-{{ $parent_category->color_hex }}">
                    <p class="h4 my-auto">{{ $parent_category->name }}</p>
                </div>
            </div>
            </div>
            <div class="modal-footer border-0">
                <form action="{{ route('category.parent.destroy', $parent_category->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>