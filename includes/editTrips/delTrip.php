<div class="modal fade" id="delTripModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Remove Trip</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="fs-5">Are you sure you want to <span class="fw-bolder"><u>DELETE</u></span> this trip?</p>
        </div>  
        <div class="modal-footer">
            <form action="includes/editTrips/delTripHandling.inc.php" method="POST">
                <input type="hidden" id="tripIdDel" name="tripIdDel" value="0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-maincolor">Delete</button>
            </form>
        </div>
    </div>
    </div>
</div>