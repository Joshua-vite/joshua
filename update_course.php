<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $course_name = $_POST['course_name'];
    $course_code = $_POST['course_code'];

    $sql = "UPDATE courses SET course_name='$course_name', course_code='$course_code' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index_course.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
