<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tripid = $_POST["tripPageId"];

    try {
        require_once "dbhandling.inc.php";
        require_once "tripPage/tripPage_model.inc.php";

        $trip = get_trip_from_id($pdo, $tripid);

        require_once "config_session.inc.php";

        $_SESSION["tripid"] = $trip["id"];
        $_SESSION["tripname"] = $trip["name"];
        $_SESSION["tripArray"] = $trip;

        header("Location: ../tripPage.php");

        $pdo = null;
        $stmt = null;
        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../chooseTrip.php");
    die();
}