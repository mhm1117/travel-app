
window.addEventListener('DOMContentLoaded', init);

function init() {
    
    let timeCheck = document.getElementById("timeCheckToggle");
    let timeInput = document.getElementById("eventTime");

    addDisableCheckToggle(timeCheck, timeInput);

    let dateCheck = document.getElementById("dateCheckToggle");
    let dateInputs = document.querySelectorAll(".evDateInput");

    dateInputs.forEach(dateInput => {
        addDisableCheckToggle(dateCheck, dateInput);
    });
}

function addDisableCheckToggle(checkToggle, target) {

    checkToggle.addEventListener('change', function() {
        target.disabled = !checkToggle.checked;
    });
}