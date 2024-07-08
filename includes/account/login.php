<div class="modal fade" id="signInModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-3" id="signInLabel">Sign In</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form>
            <div class="modal-body">
            <label for="username" class="form-label fw-bold fs-5">Name:</label>
            <input type="text" id="username" name="username" class="form-control mb-3" placeholder="Your first name.">

            <label for="pin" class="form-label fw-bold fs-5">Pin:</label>
            <input type="text" id="pin" name="pin" class="form-control" placeholder="Your 4 digit passcode.">
            </div>  
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-maincolor">Sign In</button>
            </div>
        </form>
    </div>
    </div>
</div>