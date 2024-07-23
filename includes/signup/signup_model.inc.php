<?php

declare(strict_types=1);

function get_username(object $pdo, string $username) {

    $query = "SELECT username FROM users WHERE username = :username";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function set_user(object $pdo, string $username, string $pin) {

    $query = "INSERT INTO users (username, pin) VALUES (:username, :pin);";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pin", $pin);
    $stmt->execute();
}