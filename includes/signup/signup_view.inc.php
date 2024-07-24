<?php

declare(strict_types=1);

function signup_username_input() {

    if (isset($_SESSION["signup_username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
        echo '<input type="text" id="usernameSU" name="username" 
        class="form-control mb-2" placeholder="Your first name." value="' . $_SESSION["signup_username"] .'">';
    } else {
        echo '<input type="text" id="usernameSU" name="username" class="form-control mb-2" 
        placeholder="Your first name.">';
    }
}

function check_signup_errors() {

    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];

        foreach ($errors as $error) {
            echo "<p class='form-error text-danger'>" . $error ."</p>";
        }

        unset($_SESSION["errors_signup"]);
    }
}

function check_signup_success() {
    if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo "<p class='signup-success text-success mt-2'>Successfully created an account!</p>";
    }
}