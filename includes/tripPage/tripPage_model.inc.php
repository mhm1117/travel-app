<?php

declare(strict_types=1);

function get_trip_from_id(object $pdo, int $tripid) {
    $query = "SELECT * FROM trips WHERE id = :tripId";
    
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":tripId", $tripid);
    $stmt->execute();

    $result = $stmt->fetch();

    return $result;
}