<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include 'admin/connection/index.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($connect, trim($_POST['name']));
    $email = mysqli_real_escape_string($connect, trim($_POST['email']));
    $why = mysqli_real_escape_string($connect, trim($_POST['why']));
    $query = "INSERT INTO volunteer (name, email, reason) VALUES (?, ?, ?)";
    if ($stmt = $connect->prepare($query)) {
        $stmt->bind_param("sss", $name, $email, $why);
        if ($stmt->execute()) {
            echo "Thank you for applying to be a volunteer!";
        } else {
            echo "Error: Could not execute the query. " . $connect->error;
        }
        $stmt->close();
    } else {
        echo "Error: Could not prepare the query. " . $connect->error;
    }
    $connect->close();
}