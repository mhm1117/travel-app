<?php

// $dsn = "mysql:host=localhost;dbname=travelapp_db";
// $dbusername = "root";
// $dbpassword = "";

$dsn = "mysql:host=209.58.148.242:3306;dbname=mattiem17_travelappdb";
$dbusername = "mattiem17_mainuser";
$dbpassword = "SnearKlens!17";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Yay, connection!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}