<?php
include "../config_session.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["fileSentFrom"];
    $tripName = $_POST["tripName"];
    $ppl = $_POST["tripPpl"] . ", " . $_SESSION["user_username"];
    $locales = $_POST["tripLocales"];
    $typeTimeline = $_POST["timelineInput"];
    $budget = $_POST["tripBudget"];
    $descrip = $_POST["description"];
    $imgLink = $_POST["tripImg"];

    if ($typeTimeline == "monthYear") {
        $timeline = $_POST["monthYear"];
    } else if ($typeTimeline == "dates") {
        $startDate = strtotime($_POST["startInput"]);
        $endDate = strtotime($_POST["endInput"]);
        $timeline = date('m/d/y', $startDate) . " to " . date('m/d/y', $endDate);
    }
    
    try {
        require_once "../dbhandling.inc.php";
        require_once "addTrip_model.inc.php";
        require_once "addTrip_contr.inc.php";
        
        // foreach ($_POST as $key => $value) {
        //     echo $key . " = " . $value . "<br>";
        // }

        
        if ($action == 'edit') {
            $tripId = $_POST["tripIdEdit"];
            $query = "UPDATE trips SET name = :tripName, description = :descrip, timeline = :timeline, locations = :locales,
                people = :ppl, est_budget = :budget, img = :imgLink WHERE id = $tripId;";

            update_tripuser_tripname($pdo, $tripId, $tripName);
        
        } else if ($action == 'add') {
            $query = "INSERT INTO trips (name, description, timeline, locations, people, est_budget, img) VALUES 
                (:tripName, :descrip, :timeline, :locales, :ppl, :budget, :imgLink);";
        } else {
            die();
        }

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":tripName", $tripName);
        $stmt->bindParam(":descrip", $descrip);
        $stmt->bindParam(":timeline", $timeline);
        $stmt->bindParam(":locales", $locales);
        $stmt->bindParam(":ppl", $ppl);
        $stmt->bindParam(":budget", $budget);
        $stmt->bindParam(":imgLink", $imgLink);
        
        $stmt->execute();

        // create trip_users row for each person in trip that has username
        $pplNew = str_replace(' ', '', $ppl);
        $pplNames = explode(",", $pplNew);

        foreach($pplNames as $userName) {
            if (is_user($pdo, $userName) && !has_tripuser_entry($pdo, $tripName, $userName)) {
                bind_trip_users($pdo, $userName, $tripName);
            }
        }

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