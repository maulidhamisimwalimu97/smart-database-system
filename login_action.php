<?php
session_start();
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        echo "<script>alert('Please enter both email and password'); window.history.back();</script>";
        exit();
    }

    // Admin login
    $stmt = $conn->prepare("SELECT * FROM admins WHERE email = ? AND password = ?");
    $hashedPassword = sha1($password);
    $stmt->bind_param("ss", $email, $hashedPassword);
    $stmt->execute();
    $adminResult = $stmt->get_result();

    if ($admin = $adminResult->fetch_assoc()) {
        $_SESSION['user_type'] = 'admin';
        $_SESSION['user_id'] = $admin['id'];
        $_SESSION['full_name'] = $admin['full_name'];
        $_SESSION['email'] = $admin['email'];
        header("Location: dashboard.php");
        exit();
    }

    // Regular user login
    $stmt = $conn->prepare("
        SELECT users.*, departments.department_name 
        FROM users 
        JOIN departments ON users.department_id = departments.id 
        WHERE users.email = ?
    ");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $userResult = $stmt->get_result();

    if ($user = $userResult->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_type'] = 'user';
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['department'] = $user['department_name'];

            // Department-based redirection
            switch (strtoupper($user['department_name'])) {
                case 'HOSPITAL':
                    header("Location: hospital_dashboard.php");
                    break;
                case 'TRA':
                    header("Location: TRA_dashboard.php");
                    break;
                case 'SCHOOL':
                    header("Location: school_dashboard.php");
                    break;
                case 'POLICE':
                    header("Location: police_dashboard.php");
                    break;
                default:
                    header("Location: user_dashboard.php"); // fallback
            }
            exit();
        }
    }

    echo "<script>alert('Invalid email or password'); window.history.back();</script>";
    exit();
}
?>
