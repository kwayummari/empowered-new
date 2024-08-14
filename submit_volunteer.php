<?php
include 'admin/connection/index.php';

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];

    // Insert data into the database
    $stmt = $connect->prepare("INSERT INTO volunteer (name, email, reason) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $reason);

    if ($stmt->execute()) {
        $message = "Message sent successfully!";
    } else {
        $message = "Failed to submit. Please try again later.";
    }

    $stmt->close();
    $connect->close();
}
?>
