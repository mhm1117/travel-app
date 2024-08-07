<?php

declare(strict_types= 1);

function create_trip_users(object $pdo, string $username, int $userid, string $tripname, int $tripid) {

    $query = "INSERT INTO trip_users (user_name, user_id, trip_name, trip_id)
    VALUES (:username, :userid, :tripname, :tripid);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":userid", $userid);
    $stmt->bindParam(":tripname", $tripname);
    $stmt->bindParam(":tripid", $tripid);

    $stmt->execute();
}

function get_tripid_from_name(object $pdo, string $tripname) {
    $query = "SELECT id FROM trips WHERE name = :tripname;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":tripname", $tripname);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC)["id"];
}

function get_userid_from_name(object $pdo, string $username) {
    $query = "SELECT id FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC)["id"];
}

function get_user(object $pdo, string $username) {
    
    $query = "SELECT * FROM users WHERE username = :username;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_tripuser_entry(object $pdo, string $tripname, string $username) {

    $query = "SELECT * FROM trip_users WHERE user_name = :username AND trip_name = :tripname AND trip_id IS NOT NULL;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":tripname", $tripname);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $result;
}

function update_tripuser_tripname(object $pdo, int $tripid, string $newTripname) {

    $query = "UPDATE trip_users SET trip_name = :tripname WHERE trip_id = :tripid;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam("tripid", $tripid);
    $stmt->bindParam(":tripname", $newTripname);

    $stmt->execute();
}