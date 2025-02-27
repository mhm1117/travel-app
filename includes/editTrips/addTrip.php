<div class="modal fade" id="addTripModal" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Trip</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="includes/editTrips/tripFormHandling.inc.php" method="POST">
                <div class="modal-body">
                    <p class="form-label fw-bold">Enter Details:</p>
                    <div class="input-group mb-2">
                        <span class="input-group-text">Name:</span>
                        <input type="text" id="tripName" name="tripName" class="form-control" placeholder="Trip Name"> 
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">Who's Going:</span>
                        <input type="text" id="tripPpl" name="tripPpl" class="form-control" placeholder="Please separate with commas"> 
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">Where are you going:</span>
                        <input type="text" id="tripLocales" name="tripLocales" class="form-control" placeholder="Please separate with commas">
                    </div>
                    
                    <div class="" id="accordionAdd">
                        <div class="input-group mb-2">
                            <span class="input-group-text">Timeline:</span>
                            <button type="button" class="form-control collapsed yearBtn" data-bs-toggle="collapse" data-bs-target="#yearColl">Month/Year</button>
                            <button type="button" class="form-control collapsed dateBtn" data-bs-toggle="collapse" data-bs-target="#datesColl">Dates</button>
                        </div>
                        <div class="accordion-collapse collapse show" id="yearColl" data-bs-parent="#accordionAdd">
                            <div class="input-group mb-2">
                            <span class="input-group-text">Month/Year:</span>
                            <input type="text" id="monthYear" name="monthYear" class="form-control" placeholder="Month YYYY">
                            </div>
                        </div>
                        <div class="accordion-collapse collapse" id="datesColl" data-bs-parent="#accordionAdd">
                            <input class="form-control" type="date" id="startInput" name="startInput" value="" min="2024-07-01" max="2030-12-31" />
                            <span class="input-group-text">to</span>
                            <input class="form-control" type="date" id="endInput" name="endInput" value="" min="2024-07-01" max="2030-12-31" />
                        </div>
                    </div> 

                    <div class="input-group mb-2">
                        <span class="input-group-text" style="padding-right:5px;">Estimated Budget:&nbsp;&nbsp;&nbsp;$</span>
                        <input type="text" id="tripBudget" name="tripBudget" class="form-control" placeholder="0.00">
                    </div>
                
                    <div class="mb-2">
                        <span class="form-label fw-bold">Description:</span>
                        <textarea type="text" id="description" name="description" class="form-control" placeholder="Brief description of your trip..."></textarea>
                    </div>
                    <div class="mb-2">
                        <span class="form-label fw-bold">Add an image!</span>
                        <input class="form-control" type="tet" id="tripImg" name="tripImg" placeholder="Image URLs Only">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="fileSentFrom" name="fileSentFrom" value="add">
                    <input type="hidden" id="timelineInput" name="timelineInput" value="monthYear">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-maincolor">Add Trip</button>
                </div>
            </form>
        </div>
    </div>
</div>