<div class="modal" id="delete-child_category-{{$child_category->id}}">
    <div class="modal-dialog">
        <div class="modal-content border-danger">
            <div class="modal-header border-danger">
                <h3 class="h5 modal-title text-danger">
                    <i class="fa-solid fa-circle-exclamation"></i> Delete Category
                </h3>
            </div>
            <div class="modal-body">
                <p class="text-center">Are you sure you want to delete this Child Category?</p>
            <div class="mt-3">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/category-icon/' . $parent_category->icon_path . '.svg') }}" alt="{{ $parent_category->icon_path }}" width="25px" class="me-1 filter-{{ $parent_category->color_hex }}">
                    <p class="h5 my-auto">
                        <span style="color: #{{ $parent_category->color_hex }};">{{ $parent_category->name }}</span>
                        &nbsp; &gt; &nbsp;
                        <span class="h4">{{ $child_category->name }}</span>
                    </p>
                </div>
            </div>
            </div>
            <div class="modal-footer border-0">
                <form action="{{ route('category.child.destroy', [$parent_category->id, $child_category->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>