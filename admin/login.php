<?php
session_start();
include 'connection/index.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $connect->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['name'] = $username;

        if ($user['role'] == '1') {
            header("location: home.php");
        } else {
            // Handle other roles if necessary
        }
    } else {
        echo "Wrong Username or Password";
    }

    // Close statement
    $stmt->close();
}
?>
