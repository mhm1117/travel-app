<?php

declare(strict_types= 1);

function bind_trip_event(object $pdo, string $eventName, string $tripName) {

    $tripid = get_tripid_from_name($pdo, $tripName);
    $eventid = get_eventid_from_name($pdo, $eventName);

    create_trip_events($pdo, $eventName, $eventid, $tripName, $tripid);
}