<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM courses WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index_course.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
