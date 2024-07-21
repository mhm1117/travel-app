
window.addEventListener('DOMContentLoaded', init);

function init() {

    setAddTripTimelineBtns();
    setTripCardBtns();
}

function setAddTripTimelineBtns() {

    let addModal = document.querySelector("#addTripModal");
    let editModal = document.querySelector("#editTripModal");
    let yearBtns = document.querySelectorAll(".yearBtn");
    let dateBtns = document.querySelectorAll(".dateBtn");
    let timelineAdd = addModal.querySelector("#timelineInput");
    let timelineEdit = editModal.querySelector("#timelineInputEdit");

    let defaultStyle = yearBtns[0].style.border;

    for (let i = 0;i < 2;i++) {
        yearBtns[i].style.border = "1px var(--bs-maincolor) solid";
        dateBtns[i].style.borderLeft = "1px var(--bs-maincolor) solid";

        yearBtns[i].addEventListener("click", (event) => {
            timelineAdd.value = 'monthYear';
            timelineEdit.value = 'monthYear';
            yearBtns[i].style.border = "1px var(--bs-maincolor) solid";
            dateBtns[i].style.border = defaultStyle;
            dateBtns[i].style.borderLeft = "1px var(--bs-maincolor) solid";
        });

        dateBtns[i].addEventListener("click", (event) => {
            timelineAdd.value = 'dates';
            timelineEdit.value = 'dates';
            dateBtns[i].style.border = "1px var(--bs-maincolor) solid"
            yearBtns[i].style.border = defaultStyle;
        });
    }
}

function setTripCardBtns() {

    let tripCards = document.querySelectorAll(".tripCard");
    let toDelInput = document.getElementById("tripIdDel");
    let toEditInput = document.getElementById("tripIdEdit");

    for (let card of tripCards) {
        let tripId = card.id.split("-")[1];
        console.log(tripId + "\n");
        card.querySelector(".delTripBtn").addEventListener("click", (event) => {
            toDelInput.value = parseInt(tripId);
        });

        card.querySelector(".editTripBtn").addEventListener("click", (event) => {
            toEditInput.value = parseInt(tripId);
        });
    }
}