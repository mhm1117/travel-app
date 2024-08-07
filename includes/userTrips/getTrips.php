<?php

if (isset($_SESSION["user_id"])) {

    $username = $_SESSION["user_username"];

    try {
        require_once "includes/dbhandling.inc.php";
        require_once "getTrips_model.inc.php";

        $trips_data = [];
        $tripIds = get_user_tripIds($pdo, $username);
        foreach ($tripIds as $tripId) {
            if (!is_null($tripId["trip_id"])) {
                $trip = get_trip_from_id($pdo, $tripId["trip_id"]);
                array_push($trips_data, $trip);
            }
        }
        $_SESSION["user_trips"] = $trips_data;

        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
}


