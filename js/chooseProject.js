
window.addEventListener('DOMContentLoaded', init);

function init() {

    setEditTripTimelineBtns();
    setAddTripTimelineBtns();
    setTripCardBtns();
}

async function getTripData() {
    const dataF = '../includes/userTrips/tripData.inc.php';
    try {
        const response = await fetch(dataF);
        if (!response.ok) {
            throw new Error('Response status: ${response.status}');
        }
        // console.log(response)
        const json = await response.json();
        console.log(json);
    } catch (error) {
        console.error(error.message);
    }
}

function setAddTripTimelineBtns() {

    let addModal = document.querySelector("#addTripModal");
    let yearBtn = addModal.querySelector(".yearBtn");
    let dateBtn = addModal.querySelector(".dateBtn");
    let timelineAdd = addModal.querySelector("#timelineInput");

    let defaultStyle = yearBtn.style.border;
    yearBtn.style.border = "1px var(--bs-maincolor) solid";
    dateBtn.style.borderLeft = "1px var(--bs-maincolor) solid";

    yearBtn.addEventListener("click", (event) => {
        timelineAdd.value = 'monthYear';
        yearBtn.style.border = "1px var(--bs-maincolor) solid";
        dateBtn.style.border = defaultStyle;
        dateBtn.style.borderLeft = "1px var(--bs-maincolor) solid";
    });

    dateBtn.addEventListener("click", (event) => {
        timelineAdd.value = 'dates';
        dateBtn.style.border = "1px var(--bs-maincolor) solid"
        yearBtn.style.border = defaultStyle;
    });
}

function setEditTripTimelineBtns() {
    let yearBtns = document.querySelectorAll(".editTripModal .yearBtn");
    let dateBtns = document.querySelectorAll(".editTripModal .dateBtn");
    let timelineInputs = document.querySelectorAll(".editTripModal .timelineInputEdit");

    let defaultStyle = yearBtns[0].style.border;
    for (let i = 0; i < yearBtns.length; i++) {
        if (timelineInputs[i].value == 'monthYear') {
            yearBtns[i].style.border = "1px var(--bs-maincolor) solid";
            dateBtns[i].style.borderLeft = "1px var(--bs-maincolor) solid";
        } else {
            dateBtns[i].style.border = "1px var(--bs-maincolor) solid"
            yearBtns[i].style.border = defaultStyle;
        }
    
        yearBtns[i].addEventListener("click", (event) => {
            timelineInputs[i].value = 'monthYear';
            yearBtns[i].style.border = "1px var(--bs-maincolor) solid";
            dateBtns[i].style.border = defaultStyle;
            dateBtns[i].style.borderLeft = "1px var(--bs-maincolor) solid";
        });
    
        dateBtns[i].addEventListener("click", (event) => {
            timelineInputs[i].value = 'dates';
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
        card.querySelector(".delTripBtn").addEventListener("click", (event) => {
            toDelInput.value = parseInt(tripId);
        });

        card.querySelector(".editTripBtn").addEventListener("click", (event) => {
            toEditInput.value = parseInt(tripId);
        });
    }
}