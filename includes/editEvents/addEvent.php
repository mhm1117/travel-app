<div class="modal fade" id="addEventModal" tabindex="-1" data-bs-backdrop="static" style="">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="">Add New Event</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="includes/editEvents/eventFormHandling.inc.php" method="POST">
                <div class="modal-body">
                    <span class="form-label fw-bold mb-1">Event Details</span>
                    <div class="input-group mb-1">
                        <span class="input-group-text">Event Name:</span>
                        <input type="text" id="eventName" name="eventName" class="form-control" placeholder="Event Name"> 
                    </div>
                    <div class="input-group mb-1">
                        <span class="input-group-text">Location:</span>
                        <input type="text" id="eventLocale" name="eventLocale" class="form-control" placeholder="Name of Location">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text" style="padding-right:5px;">Est. Cost:&nbsp;&nbsp;&nbsp;$</span>
                        <input type="text" id="eventCost" name="eventCost" class="form-control" placeholder="0.00">
                    </div>

                    <span class="form-label fw-bold mb-1">Date and Time</span>
                    <div class="input-group mb-1">
                        <div class="input-group-text">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="" id="dateCheckToggle" checked>
                                <label class="form-check-label" for="dateCheckToggle">Add Dates?</label> 
                            </div>
                        </div>
                        <input class="form-control evDateInput" type="date" id="startInputEvent" name="startInputEvent" value="" min="2025-01-01" max="2030-12-31" />
                        <span class="input-group-text">to</span>
                        <input class="form-control evDateInput" type="date" id="endInputEvent" name="endInputEvent" value="" min="2025-01-01" max="2030-12-31" />
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-text">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="" id="timeCheckToggle" checked>
                                <label class="form-check-label" for="timeCheckToggle">Add Time?</label> 
                            </div>
                        </div>
                        <input type="time" id="eventTime" name="eventTime" class="form-control" value="00:00">
                    </div>
                
                    <span class="form-label fw-bold mb-1">Description:</span>
                    <div class="mb-2">
                        <textarea type="text" id="eventDescript" name="eventDescript" class="form-control" placeholder="Brief description of this event..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="fileSentFrom" name="fileSentFrom" value="add">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-maincolor">Add Event</button>
                </div>
            </form>
        </div>
    </div>
</div>