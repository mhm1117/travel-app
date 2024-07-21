<div class="modal fade" id="editTripModal" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Edit Trip</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="includes/editTrips/tripFormHandling.inc.php" method="POST">
                <div class="modal-body">
                    <p class="form-label fw-bold">Enter Details:</p>
                    <div class="input-group mb-2">
                        <span class="input-group-text">Name:</span>
                        <input type="text" id="tripName" name="tripName" class="form-control" placeholder="Trip Name" value=""> 
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">Who's Going:</span>
                        <input type="text" id="tripPpl" name="tripPpl" class="form-control" placeholder="Mattie, Angie, etc."> 
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">Where are you going:</span>
                        <input type="text" id="tripLocales" name="tripLocales" class="form-control" placeholder="Seattle, Yellowstone, etc.">
                    </div>
                    
                    <div class="" id="accordionEdit">
                        <div class="input-group mb-2">
                            <span class="input-group-text">Timeline:</span>
                            <button type="button" class="form-control collapsed yearBtn" data-bs-toggle="collapse" data-bs-target="#yearCollEdit">Month/Year</button>
                            <button type="button" class="form-control collapsed dateBtn" data-bs-toggle="collapse" data-bs-target="#datesCollEdit">Dates</button>
                        </div>
                        <div class="accordion-collapse collapse show" id="yearCollEdit" data-bs-parent="#accordionEdit">
                            <div class="input-group mb-2">
                            <span class="input-group-text">Month/Year:</span>
                            <input type="text" id="monthYear" name="monthYear" class="form-control" placeholder="Month YYYY">
                            </div>
                        </div>
                        <div class="accordion-collapse collapse" id="datesCollEdit" data-bs-parent="#accordionEdit">
                            <input class="form-control" type="date" id="startInput" name="startInput" value="" min="2024-07-01" max="2030-12-31" />
                            <span class="input-group-text">to</span>
                            <input class="form-control" type="date" id="endInput" name="endInput" value="" min="2024-07-01" max="2030-12-31" />
                        </div>
                    </div> 

                    <div class="input-group mb-2">
                        <span class="input-group-text" style="padding-right:5px;">Estimated Budget:&nbsp;&nbsp;&nbsp;$</span>
                        <input type="text" id="tripBudget" name="tripBudget" class="form-control" placeholder="">
                    </div>
                
                    <div class="mb-2">
                        <span class="form-label fw-bold">Description:</span>
                        <textarea type="text" id="description" name="description" class="form-control" placeholder="Brief description of your trip..."></textarea>
                    </div>
                    <div class="mb-2">
                        <span class="form-label fw-bold">Add an image!</span>
                        <input class="form-control" type="tet" id="tripImg" name="tripImg" placeholder="Image URL">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="fileSentFrom" name="fileSentFrom" value="edit">
                    <input type="hidden" id="tripIdEdit" name="tripIdEdit" value="0">
                    <input type="hidden" id="timelineInputEdit" name="timelineInput" value="monthYear">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-maincolor">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>