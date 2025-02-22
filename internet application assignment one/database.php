<?php
$servername = "your_servername"; // Replace with your server name
$username = "your_db_username"; // Replace with your database username
$password = "your_db_password"; // Replace with your database password
$dname = "webapp_db";

try {
    $conn = new PDO("mysql:host=$servername;dname=$dname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERODE, PDO::ERODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>