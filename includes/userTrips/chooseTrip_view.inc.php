<?php

declare(strict_types=1);

function output_trip_cards() {
    if(isset($_SESSION["user_trips"])) {
        foreach ($_SESSION["user_trips"] as $trip) {
            echo '<div class="card mb-4 tripCard" style="width: 250px; height: fit-content;" id="tripCard-' . htmlspecialchars(strval($trip["id"])) . '">
            <img src="' . htmlspecialchars($trip["img"]) . '" class="d-none d-sm-block card-img-top" alt="trip-image" style="max-height: 6.2em;">
            <div class="card-body">
                <h5 class="card-title">' . htmlspecialchars($trip["name"]) . '</h5>
                <p class="card-text">' . htmlspecialchars($trip["description"]) . '</p>
                <div class="d-flex flex-nowrap align-items-center justify-content-between">
                    <form action="includes/tripPageHandling.inc.php" method="post">  
                        <input type="hidden" id="tripPageId" name="tripPageId" value="' . htmlspecialchars(strval($trip["id"])) . '">
                        <button type="submit" class="btn btn-maincolor text-light fw-bold tripPageBtn">Select Trip</button>
                    </form>
                    <span>
                        <input type="hidden" id="editBtnId" name="editBtnId" value="' . htmlspecialchars(strval($trip["id"])) . '">
                        <button type="" id="editTripBtn-' . htmlspecialchars(strval($trip["id"])) . '" class="text-maincolor editTripBtn btn btn-link" data-bs-toggle="modal" data-bs-target="#editTripModal-' . htmlspecialchars(strval($trip["id"])) . '">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentcolor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </button>
                        <a type="button" id="" class="text-maincolor delTripBtn" data-bs-toggle="modal" data-bs-target="#delTripModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </div>';
        }
      } else {
            echo '<h1 class="text-maincolor text-center mt-4">
            You do not have access to any trips! Please log in!</h1>';
      }   
}

function output_edit_modals() {
    if(isset($_SESSION["user_trips"])) {
        foreach ($_SESSION["user_trips"] as $trip) {
            $timelineInput = "monthYear";
            $monthYearShow = "show";
            $datesShow = "";
            $monthYear = "";
            $dates = [time(),time()];
            if (substr_count($trip["timeline"], "to")) {
                $dates = explode(" to ", $trip["timeline"]);
                $dates = array_map("strtotime", $dates);
                $monthYearShow = "";
                $datesShow = "show";
                $timelineInput = "dates";
            } else {
                $monthYear = $trip["timeline"];
            }
            echo '
            <div class="modal fade editTripModal" id="editTripModal-' . htmlspecialchars(strval($trip["id"])) . '" tabindex="-1" data-bs-backdrop="static">
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
                                <input type="text" id="tripName" name="tripName" class="form-control" placeholder="Trip Name" value="' . htmlspecialchars($trip["name"]) . '"> 
                            </div>
                            <div class="input-group mb-2">
                                <span class="input-group-text">Who is Going:</span>
                                <input type="text" id="tripPpl" name="tripPpl" class="form-control" placeholder="Mattie, Angie, etc." value="' . htmlspecialchars($trip["people"]) . '"> 
                            </div>
                            <div class="input-group mb-2">
                                <span class="input-group-text">Where are you going:</span>
                                <input type="text" id="tripLocales" name="tripLocales" class="form-control" placeholder="Seattle, Yellowstone, etc." value="' . htmlspecialchars($trip["locations"]) . '">
                            </div>
                    
                            <div class="" id="accordionEdit-' . htmlspecialchars(strval($trip["id"])) . '">
                                <div class="input-group mb-2">
                                    <span class="input-group-text">Timeline:</span>
                                    <button type="button" class="form-control collapsed yearBtn" data-bs-toggle="collapse" data-bs-target="#yearCollEdit-' . htmlspecialchars(strval($trip["id"])) . '">Month/Year</button>
                                    <button type="button" class="form-control collapsed dateBtn" data-bs-toggle="collapse" data-bs-target="#datesCollEdit-' . htmlspecialchars(strval($trip["id"])) . '">Dates</button>
                                </div>
                                <div class="accordion-collapse collapse ' . $monthYearShow . '" id="yearCollEdit-' . htmlspecialchars(strval($trip["id"])) . '" data-bs-parent="#accordionEdit-' . htmlspecialchars(strval($trip["id"])) . '">
                                    <div class="input-group mb-2">
                                    <span class="input-group-text">Month/Year:</span>
                                    <input type="text" id="monthYear" name="monthYear" class="form-control" placeholder="Month YYYY" value="' . $monthYear . '">
                                    </div>
                                </div>
                                <div class="accordion-collapse collapse ' . $datesShow . '" id="datesCollEdit-' . htmlspecialchars(strval($trip["id"])) . '" data-bs-parent="#accordionEdit-' . htmlspecialchars(strval($trip["id"])) . '">
                                    <input class="form-control" type="date" id="startInput" name="startInput" value="' . date("Y-m-d",$dates[0]) . '" min="2024-07-01" max="2030-12-31" />
                                    <span class="input-group-text">to</span>
                                    <input class="form-control" type="date" id="endInput" name="endInput" value="' . date("Y-m-d",$dates[0]) . '" min="2024-07-01" max="2030-12-31" />
                                </div>
                            </div> 

                            <div class="input-group mb-2">
                                <span class="input-group-text" style="padding-right:5px;">Estimated Budget:&nbsp;&nbsp;&nbsp;$</span>
                                <input type="text" id="tripBudget" name="tripBudget" class="form-control" placeholder="" value="' . htmlspecialchars(strval($trip["est_budget"])) . '">
                            </div>
                    
                            <div class="mb-2">
                                <span class="form-label fw-bold">Description:</span>
                                <textarea type="text" id="description" name="description" class="form-control" placeholder="Brief description of your trip...">' . htmlspecialchars($trip["description"]) . '</textarea>
                            </div>

                            <div class="mb-2">
                                <span class="form-label fw-bold">Add an image!</span>
                                <input class="form-control" type="tet" id="tripImg" name="tripImg" placeholder="Image URL" value="' . htmlspecialchars($trip["img"]) . '">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="" name="fileSentFrom" value="edit">
                            <input type="hidden" id="" name="tripIdEdit" value=' . htmlspecialchars(strval($trip["id"])) . '>
                            <input type="hidden" class="timelineInputEdit" name="timelineInput" value="' . $timelineInput . '">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-maincolor">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>';
        } 
    }
}