<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tripId = $_POST["tripIdDel"];

    try {
        require_once "../dbhandling.inc.php";
        require_once "deleteTrip_model.inc.php";

        delete_trip($pdo, $tripId);

        delete_trip_tripusers($pdo);

        $pdo = null;
        $stmt = null;

        header("Location: ../../chooseTrip.php");

        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../../chooseTrip.php");
}