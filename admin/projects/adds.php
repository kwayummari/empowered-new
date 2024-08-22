<?php
ob_start();
session_start();
include '../connection/index.php';

if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($connect, trim($_POST['title']));
    $caption = mysqli_real_escape_string($connect, trim($_POST['caption']));
    $description = mysqli_real_escape_string($connect, trim($_POST['description']));

    if (isset($_FILES["cv"]) && $_FILES["cv"]["error"] == 0) {
        $allowedTypes = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        $fileType = mime_content_type($_FILES['cv']['tmp_name']);
        if (in_array($fileType, $allowedTypes)) {
            $file = $_FILES["cv"]["name"];
            $path = $_FILES['cv']['tmp_name'];
            $folder = "../../img/blogs/";
            $final_name = str_replace(" ", "-", basename($file));
            $status = "1";
            $query = $connect->prepare("INSERT INTO projects (title, caption, description, status, image) VALUES (?, ?, ?, ?, ?)");
            $query->bind_param("sssss", $title, $caption, $description, $status, $final_name);

            if ($query->execute()) {
                $productId = $query->insert_id;
                if (move_uploaded_file($path, $folder . $final_name)) {
                    header("Location: index.php");
                    exit;
                } else {
                    echo "Failed to upload image.";
                }
            } else {
                echo "Failed to add blog: " . $query->error;
            }
            $query->close();
        } else {
            echo "Invalid file type. Please upload a JPEG, PNG, or GIF image.";
        }
    } else {
        echo "Invalid file upload.";
    }
}
$connect->close();
ob_end_flush();
