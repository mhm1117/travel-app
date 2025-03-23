<?php
declare(strict_types= 1);

function output_tripname() {
    if (isset($_SESSION["tripid"])) {
        echo $_SESSION["tripname"];
    } else {
        echo "No Trip Selected";
    }
}

function display_trip_img() {
    $trip = $_SESSION["tripArray"];
    echo '
        <div class="">
            <img class="rounded-top-4 object-fit-cover" 
            style="max-width: 100%; height: 200px; min-width: 100%;" src="' . $trip["img"] . '">
        </div>';
    
}

function display_trip_info () {
    $trip = $_SESSION["tripArray"];

    if ($trip["est_budget"] === 0) {
        $tripBudget = 'Unknown';
    } else {
        $tripBudget = "$" . $trip['est_budget'];
    }

    // echo '
    //     <h1 class="text-dark fw-bold" style="">' . $trip["name"] . '</h1>
    //     <div class="fw-bold fs-3 text-dark" style="max-width: 90%;" id="tripSummary">
    //         <p>' . $trip["description"] . '</p>
    //     </div>
    //     <div class="fs-4 text-dark" style="max-width: 90%;" id="tripDetails">
    //         <div class="row py-2">
    //             <div class="col px-5">
    //                 <span class="fw-bold">Timeline: </span>
    //                 <span>' . $trip["timeline"] . '</span>
    //             </div>
    //             <div class="col px-5">
    //                 <span class="fw-bold">Locations: </span>
    //                 <span>' . $trip["locations"] . '</span>
    //             </div>
    //         </div>
    //         <div class="row py-2">
    //             <div class="col px-5">
    //                 <span class="fw-bold">Est. Budget: </span>
    //                 <span>' . $tripBudget . '</span>
    //             </div>
    //             <div class="col px-5">
    //                 <span class="fw-bold">Who is Going: </span>
    //                 <span>' . $trip["people"] . '</span>
    //             </div>
    //         </div>
    //     </div>';
}