<?php

require_once "includes/dbhandling.inc.php";
require_once "includes/editTrips/addTrip_model.inc.php";
require_once "includes/editTrips/addTrip_contr.inc.php";


$username = "Mattie";
$tripname = "New Trip Name 4";

$no_entry = !has_tripuser_entry($pdo, $tripname, $username);

if ($no_entry) {
    echo "doesn't have entry";
} else {
    echo "has entry";
}