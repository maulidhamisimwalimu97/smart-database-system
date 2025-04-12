<?php
session_start();
include 'db_connection.php'; // Ensure this connects properly to your DB

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['username']);
    $password = trim($_POST['password']);
    $hashedPassword = sha1($password); // Hash password to match DB

    // Validate input
    if (empty($email) || empty($password)) {
        echo "<script>alert('Please enter both email and password'); window.history.back();</script>";
        exit();
    }

    // Check admin login with SHA1 password
    $stmt = $conn->prepare("SELECT * FROM admins WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $hashedPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($admin = $result->fetch_assoc()) {
        // Set session variables
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['full_name'] = $admin['full_name'];  // Store full name
        $_SESSION['email'] = $admin['email'];  // Store email
        header("Location: dashboard.php"); // Redirect after successful login
        exit();
    } else {
        echo "<script>alert('Invalid email or password'); window.history.back();</script>";
        exit();
    }
}
?>
