<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    if ($action === 'update') {
        $id = $_POST['id'];
        $name = trim($_POST['department_name']);
        $description = trim($_POST['description']);

        // Check if variables are received correctly
        error_log("Updating department: ID = $id, Name = $name, Description = $description");

        // Prepare the update query
        $stmt = $conn->prepare("UPDATE departments SET department_name = ?, description = ? WHERE id = ?");
        $stmt->bind_param("ssi", $name, $description, $id);

        if ($stmt->execute()) {
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false, "message" => "Update failed"]);
        }

        $stmt->close();
    } elseif ($action === 'delete') {
        $id = $_POST['id'];

        // Check if delete operation works correctly
        error_log("Deleting department with ID: $id");

        // Delete query
        $stmt = $conn->prepare("DELETE FROM departments WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false, "message" => "Delete failed"]);
        }

        $stmt->close();
    }

    $conn->close();
}
?>
