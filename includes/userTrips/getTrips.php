<?php

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_SESSION["user_id"])) {
    
    $username = $_SESSION["user_username"];

    try {
        require_once "includes/dbhandling.inc.php";
        require_once "getTrips_model.inc.php";
        require_once "getTrips_view.inc.php";

        $tripIds = get_user_tripIds($pdo, $username);
        foreach ($tripIds as $tripId) {
            if (!is_null($tripId["trip_id"])) {
                $trip = get_trip_from_id($pdo, $tripId["trip_id"]);
                output_trip($trip);
            }
        }
    
        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    echo '<h1 class="text-maincolor text-center mt-4">
    You do not have access to any trips! Please log in!</h1>';
}


