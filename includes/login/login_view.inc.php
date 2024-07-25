<?php

declare(strict_types=1);

function output_username() {

    if (isset($_SESSION["user_id"])) {
        echo $_SESSION["user_username"];
    } else {
        echo "Guest";
    }
}

function login_btn() {

    if (isset($_SESSION["user_id"])) {
        echo '
        <form action="includes/login/logout.inc.php" method="POST">
            <button type="submit" id="navLoginBtn" class="btn btn-maincolor text-light fw-bold h-100">Log Out</button>
        </form>';
    } else {
        echo '
        <form action="index.php" method="POST">
            <button type="submit" id="navLoginBtn" class="btn btn-maincolor text-light fw-bold h-100">Log In</button>
        </form>';
    }
}

function check_login_errors() {

    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        foreach ($errors as $error) {
            echo "<p class='form-error text-danger'>" . $error ."</p>";
        }

        unset($_SESSION["errors_login"]);
    } else if (isset($_GET["login"]) && $_GET["login"] === "success") {
        echo "<p class='signup-success  text-success'>Successfully logged in!</p>";
    }
}
