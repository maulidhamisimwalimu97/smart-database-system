<?php
session_start();
include 'db_connection.php';

ini_set('display_errors', 0);
error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $user_id = $_POST['user_id'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $created_at = date("Y-m-d H:i:s");

    // Image upload
    $image_name = "";
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_name = time() . "_" . basename($_FILES['image']['name']);
        $image_tmp = $_FILES['image']['tmp_name'];
        @move_uploaded_file($image_tmp, "uploads/images/" . $image_name);
    }

    // File upload
    $file_name = "";
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file_name = time() . "_" . basename($_FILES['file']['name']);
        $file_tmp = $_FILES['file']['tmp_name'];
        @move_uploaded_file($file_tmp, "uploads/files/" . $file_name);
    }

    $sql = "INSERT INTO police_records (user_id, title, image, file, content, created_at) 
            VALUES ('$user_id', '$title', '$image_name', '$file_name', '$content', '$created_at')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['alert'] = [
            'type' => 'success',
            'message' => 'News posted successfully!'
        ];
    } else {
        $_SESSION['alert'] = [
            'type' => 'error',
            'message' => 'Failed to post news. Please try again.'
        ];
    }

    $conn->close();
    header("Location: police.php");
    exit();
}
?>
