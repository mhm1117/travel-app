<?php

declare(strict_types= 1);

function delete_trip(object $pdo, int $tripid) {

    $query = "DELETE FROM trips WHERE id = :id";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $tripid);

    $stmt->execute();
}

function delete_trip_tripusers(object $pdo) {

    $query = "DELETE FROM trip_users WHERE trip_id IS NULL";

    $stmt = $pdo->prepare($query);

    $stmt->execute();
}