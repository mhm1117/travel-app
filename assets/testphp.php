
<!-- Form layout for adding transportation to event -->
<span class="form-label fw-bold mb-1">Transportation:</span>
<div class="input-group mb-1">
    <span class="input-group-text">Type:</span>
    <select class="form-select" id="transType" name="transType">
        <option selected disabled class="bg-secondary-subtle">Choose...</option>
        <option value="1">Bus</option>
        <option value="2">Car</option>
        <option value="3">Plane</option>
        <option value="4">Rideshare</option>
        <option value="5">Train</option>
        <option value="6">Other</option>
    </select>
</div>
<div class="input-group mb-2">
    <span class="input-group-text" style="padding-right:5px;">Est. Cost:&nbsp;&nbsp;&nbsp;$</span>
    <input type="number" id="transCost" name="transCost" class="form-control" placeholder="0">
</div>