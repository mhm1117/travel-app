<?php
include "../config_session.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["fileSentFrom"];
    $eventName = $_POST["eventName"];
    $location = $_POST["eventLocale"];
    $eventTime = $_POST["eventTime"];
    $cost = $_POST["eventCost"];
    $descript = $_POST["eventDescript"];
    $userName = $_SESSION["user_username"];

    // date handling/cleaning
    if ($_POST["startInputEvent"] == $_POST["endInputEvent"]) {
        $eventDates = date('m/d/y', strtotime($_POST["startInputEvent"]));
    } else {
        $startDate = strtotime($_POST["startInputEvent"]);
        $endDate = strtotime($_POST["endInputEvent"]);
        $eventDates = date('m/d/y', $startDate) . " to " . date('m/d/y', $endDate);
    }
    // time string handling/cleaning
    $timeHour = substr($eventTime, 0,2);
    if ($timeHour >= 13) {
        $eventTime = substr_replace($eventTime, $timeHour % 12, 0, 2);
        $eventTime = $eventTime . " PM";
    } else {
        $eventTime = substr($eventTime, 1) . " AM";
        if ($timeHour == 0)
            $eventTime = substr_replace($eventTime, "12", 0, 1);
    }

    try {
        require_once "../dbhandling.inc.php";
        require_once "../editTrips/addTrip_model.inc.php";
        require_once "addEvent_model.inc.php";
        require_once "addEvent_contr.inc.php";

        if ($action == 'add') {
            $query = "INSERT INTO events (name, location, description, day_date, time_at, est_cost, created_by) VALUES 
                (:eventName, :location, :descript, :dates, :eventTime, :est_cost, :creator);";
        } else {
            die();
        }

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":eventName", $eventName);
        $stmt->bindParam(":descript", $descript);
        $stmt->bindParam(":dates", $eventDates);
        $stmt->bindParam(":location", $location);
        $stmt->bindParam(":eventTime", $eventTime);
        $stmt->bindParam(":est_cost", $cost);
        $stmt->bindParam(":creator", $userName);
        
        $stmt->execute();

        if (isset($_SESSION["tripid"])) {
            bind_trip_event($pdo, $eventName, $_SESSION["tripname"]);
        }

        $pdo = null;
        $stmt = null;

        header("Location: ../../eventsList.php");

        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
}
