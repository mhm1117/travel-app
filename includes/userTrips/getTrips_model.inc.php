<?php

declare(strict_types=1);
function get_user_tripIds(object $pdo, string $username) {
    $query = "SELECT trip_id FROM trip_users WHERE user_name = :username";
    
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $results;
} 

function get_trip_from_id(object $pdo, int $tripId) {
    $query = "SELECT * FROM trips WHERE id = :tripId";
    
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":tripId", $tripId);
    $stmt->execute();

    $result = $stmt->fetch();

    return $result;
}