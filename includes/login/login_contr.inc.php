<?php

declare(strict_types=1);

function is_input_empty(string $username, string $pin) {

    if (empty($username) || empty($pin)) {
        return true;
    } else {
        return false;
    }
}

function is_username_wrong(bool|array $result) {
    if (!$result) {
        return true;
    } else {
        return false;
    }
}

function is_pin_wrong(string $pinInput, string $pin) {
    if ($pinInput !== $pin) {
        return true;
    } else {
        return false;
    }
}