<div class="modal fade" id="editTripModal" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Trip</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
                <div class="modal-body">
                    <p class="form-label fw-bold">Details:</p>
                    <div class="input-group mb-2">
                    <span class="input-group-text">Name:</span>
                    <input type="text" id="nameInput" class="form-control" placeholder="Trip Name"> 
                    </div>
                    <div class="input-group mb-2">
                    <span class="input-group-text">Who's Going:</span>
                    <input type="text" id="peopleInput" class="form-control" placeholder="Mattie, Angie, etc."> 
                    </div>
                    
                    <div class="" id="accordion">
                    <div class="input-group mb-2">
                        <span class="input-group-text">Timeline:</span>
                        <button type="button" class="form-control" data-bs-toggle="collapse" data-bs-target="#yearColl">Month/Year</button>
                        <button type="button" class="form-control collapsed" data-bs-toggle="collapse" data-bs-target="#datesColl">Dates</button>
                    </div>
                    <div class="accordion-collapse show" id="yearColl" data-bs-parent="#accordion">
                        <div class="input-group mb-2">
                        <span class="input-group-text">Month/Year:</span>
                        <input type="text" id="yearInput" class="form-control" placeholder="Month YYYY">
                        </div>
                    </div>
                    <div class="accordion-collapse collapse" id="datesColl" data-bs-parent="#accordion">
                        <input class="form-control" type="date" id="startInput" value="2024-07-01" min="2024-07-01" max="2030-12-31" />
                        <span class="input-group-text">to</span>
                        <input class="form-control" type="date" id="endInput" value="2024-07-01" min="2024-07-01" max="2030-12-31" />
                    </div>
                    </div>
                
                    <div class="mb-2">
                    <span class="form-label fw-bold">Description:</span>
                    <textarea type="text" id="descInput" class="form-control" placeholder="Brief description of your trip..."></textarea>
                    </div>
                    <div class="mb-2">
                    <span class="form-label fw-bold">Image</span>
                    <input class="form-control" type="tet" id="imgInput" placeholder="Paste image link here.">
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-maincolor">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>