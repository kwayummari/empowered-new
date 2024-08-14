<?php
include 'admin/connection/index.php';

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $reason = $_GET['reason'];

    // Insert data into the database
    $stmt = $connect->prepare("INSERT INTO volunteer (name, email, reason) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $reason);

    if ($stmt->execute()) {
        $message = "Message sent successfully!";
        header('Location: index.php');
    } else {
        $message = "Failed to submit. Please try again later.";
    }

    $stmt->close();
    $connect->close();
} else {
    $message = "Failed to submit. Please try again later.";
    echo $message;
}

