<?php
ob_start();
session_start();
include '../connection/index.php';

if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($connect, trim($_POST['title']));
    $caption = mysqli_real_escape_string($connect, trim($_POST['caption']));
    $description = mysqli_real_escape_string($connect, trim($_POST['description']));
    
    if (isset($_FILES["cv"]) && $_FILES["cv"]["error"] == 0) {
        $allowedTypes = ['image/jpg', 'image/png', 'image/gif'];
        $fileType = mime_content_type($_FILES['cv']['tmp_name']);
        echo "Detected MIME type: " . $fileType;
        if (in_array($fileType, $allowedTypes)) {
            $file = $_FILES["cv"]["name"];
            $path = $_FILES['cv']['tmp_name'];
            $folder = "../../assets/images/";
            $final_name = time() . '-' . str_replace(" ", "-", basename($file));
            
            $query = $connect->prepare("INSERT INTO blogs (title, caption, description, status, image) VALUES (?, ?, ?, '0', ?)");
            $query->bind_param("ssis", $title, $caption, $description, $sellerId, $final_name);
            
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
