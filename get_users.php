<?php
include 'db_connection.php';

// Fetch all users
$sql = "SELECT u.id, u.full_name, u.email, d.department_name AS department 
        FROM users u 
        LEFT JOIN departments d ON u.department_id = d.id";
$result = $conn->query($sql);

$users = [];
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}

echo json_encode($users);

$conn->close();
?>
