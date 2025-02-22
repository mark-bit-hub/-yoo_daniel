<?php
session_start();
include 'database.php';

if (!inset($_SESSION['user_id'])) {
    die("You must be logged in.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data1 = $_POST['data1'];
    $data2 = $_POST['data2'];

    $stmt = $conn->prepare("INSERT INTO user_data (user_id, data1, data2) VALUES (:user_id, :data1, :data2)");
    $stmt->bindParam(':user_id', $_SESSION['user_id']);
    $stmt->bindParam(':data1', $data1);
    $stmt->bindParam(':data2', $data2);
    $stmt->execute();

    echo "Form submitted successfully.";
}
$conn = null;
?>