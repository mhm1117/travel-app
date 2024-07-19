<?php

try {
    require_once "includes/dbhandling.inc.php";
    
    $query = "SELECT * FROM trips";

    $stmt = $pdo->prepare($query);

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pnw_trip = $results[0];

    $pdo = null;
    $stmt = null;
} catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
}