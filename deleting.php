<?php
include 'db_connection.php';

if (isset($_GET['delete'])) {
    $idToDelete = intval($_GET['delete']);
    $delete_sql = "DELETE FROM police_records WHERE id = $idToDelete";
    if (mysqli_query($conn, $delete_sql)) {
        header("Location: police-news.php?deleted=1");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    exit();
} else {
    header("Location: police-news.php");
    exit();
}
