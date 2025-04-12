<?php
$conn = new mysqli("localhost", "root", "", "integrated");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
