<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tripId = $_POST["tripPageId"];

    try {
        require_once "dbhandling.inc.php";

        $query = "SELECT * FROM trips WHERE id = :id";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id", $tripId);
        $stmt->execute();
        $trip = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];

        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    
}