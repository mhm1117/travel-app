<?php

declare(strict_types= 1);

function bind_trip_users(object $pdo, array $trip, array $user) {

    $query = "INSERT INTO trip_users (user_name, user_id, trip_name, trip_id)";
    $stmt = $pdo->prepare($query);
}