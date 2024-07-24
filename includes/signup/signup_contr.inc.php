<?php

declare(strict_types=1);

function is_input_empty(string $username, string $pin) {

    if (empty($username) || empty($pin)) {
        return true;
    } else {
        return false;
    }
}

function is_username_taken(object $pdo, string $username) {

    if (get_username($pdo, $username)) {
        return true;
    } else {
        return false;
    }
}

function is_pin_invalid(string $pin) {

    $pattern = '/^[0-9]+$/';
    if (!preg_match($pattern, $pin) || strlen($pin) != 4) {
        return true;
    } else {
        return false;
    }
}

function create_user(object $pdo, string $username, string $pin) {

    set_user($pdo, $username, $pin);
}