<?php
session_start();
include 'db_connection.php';

header('Content-Type: application/json');

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Session expired. Please log in again.']);
    exit;
}

$userId = $_SESSION['user_id'];
$currentPassword = $_POST['current_password'];
$newPassword = $_POST['new_password'];
$confirmPassword = $_POST['confirm_password'];

// Validate inputs
if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
    echo json_encode(['status' => 'error', 'message' => 'Please fill in all fields.']);
    exit;
}

if ($newPassword !== $confirmPassword) {
    echo json_encode(['status' => 'error', 'message' => 'New passwords do not match.']);
    exit;
}

// Get hashed password from DB
$stmt = $conn->prepare("SELECT password FROM users WHERE id = ?");
$stmt->bind_param('i', $userId);
$stmt->execute();
$stmt->bind_result($hashedPassword);
$stmt->fetch();
$stmt->close();

// Check if fetch failed
if (empty($hashedPassword)) {
    echo json_encode(['status' => 'error', 'message' => 'User not found or session expired.']);
    exit;
}

// Verify current password
if (!password_verify($currentPassword, $hashedPassword)) {
    echo json_encode(['status' => 'error', 'message' => 'Current password is incorrect.']);
    exit;
}

// Hash new password and update
$newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
$updateStmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
$updateStmt->bind_param('si', $newHashedPassword, $userId);

if ($updateStmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'Password changed successfully.']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Failed to update password.']);
}
$updateStmt->close();
?>
