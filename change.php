<?php
include 'db_connection.php';

header('Content-Type: application/json');

// Get the JSON input from JavaScript
$data = json_decode(file_get_contents("php://input"), true);

// Check if it's a delete action
if (isset($data['action']) && $data['action'] === 'delete' && isset($data['id'])) {
    $userId = intval($data['id']);

    // Delete the user from the database
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
    $conn->close();
    exit();
}

// Optional fallback for invalid requests
echo json_encode(['success' => false, 'message' => 'Invalid request']);
?>
