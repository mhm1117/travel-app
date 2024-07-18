<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $username = $_POST["username"];
    // $pin = $_POST["pin"];

    try {
        require_once "../dbhandling.inc.php";
        
        // $query = "INSERT INTO users (username, pin) VALUES 
        // (:username, :pin);";

        // $stmt = $pdo->prepare($query);
        // $stmt->bindParam(":username", $username);
        // $stmt->bindParam(":pin", $pin);
        // $stmt->execute();

        // $pdo = null;
        // $stmt = null;

        // header("Location: ../index.php");

        // die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../../chooseProject.php");
}