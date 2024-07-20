
window.addEventListener('DOMContentLoaded', init);

function init() {

    setAddTripTimelineBtns();
    setDeleteButtons();
}

function setAddTripTimelineBtns() {

    let addModal = document.querySelector("#addTripModal");
    let yearBtn = addModal.querySelector(".yearBtn");
    let dateBtn = addModal.querySelector(".dateBtn");
    let timeline = addModal.querySelector("#timelineInput");

    let defaultStyle = yearBtn.style.border;
    yearBtn.style.border = "1px var(--bs-maincolor) solid"
    dateBtn.style.borderLeft = "1px var(--bs-maincolor) solid";
    yearBtn.addEventListener("click", (event) => {
        timeline.value = 'monthYear';
        yearBtn.style.border = "1px var(--bs-maincolor) solid";
        dateBtn.style.border = defaultStyle;
        dateBtn.style.borderLeft = "1px var(--bs-maincolor) solid";
    });

    dateBtn.addEventListener("click", (event) => {
        timeline.value = 'dates';
        dateBtn.style.border = "1px var(--bs-maincolor) solid"
        yearBtn.style.border = defaultStyle;
    });
}

function setDeleteButtons() {

    let tripCards = document.querySelectorAll(".tripCard");
    let toDelInput = document.getElementById("tripIdDel");

    for (let card of tripCards) {
        let tripId = card.id.split("-")[1];
        console.log(tripId + "\n");
        card.querySelector(".delTripBtn").addEventListener("click", (event) => {
            toDelInput.value = parseInt(tripId);
        });
    }
}