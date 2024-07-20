<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tripId = $_POST["tripIdDel"];

    echo $tripId;
    try {
        require_once "../dbhandling.inc.php";

        $query = "DELETE FROM trips WHERE id = :id";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":id", $tripId);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../../chooseProject.php");

        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../../chooseProject.php");
}