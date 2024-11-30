<?php

declare(strict_types=1);

if (isset($_SESSION["user_id"])) {

    $username = $_SESSION["user_username"];

    if (isset($_SESSION["trip_id"])) {

        $tripname = $_SESSION["tripname"];

        try {
            require_once "includes/dbhandling.inc.php";
            require_once "getEvents_model.inc.php";

            

            $pdo = null;
            $stmt = null;

        } catch (PDOException $e) {
            die("Query Failed: " . $e->getMessage());
        }
    }   
}