<?php

declare(strict_types=1);

function get_eventid_from_name(object $pdo, string $eventName) {
    $query = "SELECT id FROM events WHERE name = :eventname;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":eventname", $eventName);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC)["id"];
}

function create_trip_events(object $pdo, string $eventName, int $eventid, string $tripName, int $tripid) {
    $query = "INSERT INTO trip_events (event_name, event_id, trip_name, trip_id)
    VALUES (:eventname, :eventid, :tripname, :tripid);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":eventname", $eventName);
    $stmt->bindParam(":eventid", $eventid);
    $stmt->bindParam(":tripname", $tripName);
    $stmt->bindParam(":tripid", $tripid);

    $stmt->execute();
}