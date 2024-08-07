<?php

declare(strict_types= 1);

function bind_trip_users(object $pdo, string $username, string $tripname) {

    $tripid = get_tripid_from_name($pdo, $tripname);
    $userid = get_userid_from_name($pdo, $username);

    create_trip_users($pdo, $username, $userid, $tripname, $tripid);
}

function is_user(object $pdo, string $username) {
    $result = get_user($pdo, $username);

    if ($result) { 
        return true;
    } else {
        return false;
    }
}

function has_tripuser_entry(object $pdo, string $tripname, string $username) {
    $result = get_tripuser_entry($pdo, $tripname, $username);

    if ($result) { 
        return true;
    } else {
        return false;
    }
}