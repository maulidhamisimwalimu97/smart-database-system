<?php
include 'db_connection.php';
header('Content-Type: application/json'); // Tell the browser to expect JSON

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['department_name']);
    $description = trim($_POST['description']);

    if (!empty($name) && !empty($description)) {
        $stmt = $conn->prepare("INSERT INTO departments (department_name, description) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $description);

        if ($stmt->execute()) {
            echo json_encode([
                "success" => true,
                "message" => "Department registered successfully!"
            ]);
        } else {
            echo json_encode([
                "success" => false,
                "message" => "Failed to register department. Please try again."
            ]);
        }

        $stmt->close();
    } else {
        echo json_encode([
            "success" => false,
            "message" => "Please fill in all required fields."
        ]);
    }

    $conn->close();
} else {
    echo json_encode([
        "success" => false,
        "message" => "Invalid request method."
    ]);
}
?>
