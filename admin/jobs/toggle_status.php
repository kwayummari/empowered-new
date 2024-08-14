<?php
session_start();
include '../connection/index.php';
if (isset($_GET['id'])) {
    $productId = intval($_GET['id']);
    $query = "SELECT status FROM jobs WHERE id = '$productId'";
    $result = mysqli_query($connect, $query);
    $product = mysqli_fetch_assoc($result);
    if ($product) {
        $newStatus = $product['status'] == 1 ? 0 : 1;
        $update_query = "UPDATE jobs SET status = '$newStatus' WHERE id = '$productId'";
        mysqli_query($connect, $update_query);
        header("Location: index.php");
        exit;
    } else {
        echo "Jobs not found.";
    }
} else {
    echo "No jobs ID provided.";
}