<?php
include 'db.php';

$id = $_GET['id']; // Get the task ID

$sql = "DELETE FROM tasks WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: task_list.php");
} else {
    echo "Error deleting task: " . $conn->error;
}

$conn->close();
?>
