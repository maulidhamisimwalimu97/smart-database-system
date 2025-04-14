<?php
include 'db_connection.php';

$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
$limit = 3;

$sql = "SELECT title, DATE_FORMAT(created_at, '%Y-%m-%d') AS created_at 
        FROM police_records 
        ORDER BY created_at DESC 
        LIMIT $limit OFFSET $offset";

$result = mysqli_query($conn, $sql);
$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
?>
