<?php

$dsn = "mysql:host=localhost;dbname=travelapp_db";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Yay, connection!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}