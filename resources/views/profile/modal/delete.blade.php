<div class="modal" id="delete-account">
    <div class="modal-dialog">
        <div class="modal-content border-0">
            <div class="modal-header border-0">
                <h3 class="h5 modal-title text-dark mx-auto pt-3">
                    <i class="fa-solid fa-circle-exclamation text-danger"></i> Delete Account
                </h3>
            </div>
            <div class="modal-body p-5 pt-3">
                <p>Deleting your account will remove all of your information form our database. This cannot be undone.</p>
                <div class="row justify-content-center my-4">
                    <img src="images/pig.png" alt="Money-juu" style="width: 100px">
                </div>
                <form action="#" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-outline-danger rounded-pill w-100" data-bs-dismiss="modal">Cancel</button>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-danger rounded-pill w-100">Delete Account</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>