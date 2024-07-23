<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $pin = $_POST["pin"];

    try {
        require_once '../dbhandling.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        $errors = [];

        if (is_input_empty($username, $pin)) {
            $errors["empty_input"] = "Fill in all fields!";
        }
        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Username already taken!";
        }
        if (is_pin_invalid($pin)) {
            $errors["invalid_pin"] = "Pin is invalid! Must be 4 digits!";
        }

        require_once '../config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;

            $signupUsername = $username;
            $_SESSION["signup_username"] = $signupUsername;
            
            header("Location: ../../index.php");
            die();
        }

        create_user($pdo, $username, $pin);

        header("Location: ../../index.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../../index.php");
    die();
}