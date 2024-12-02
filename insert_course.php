<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course_name = $_POST['course_name'];
    $course_code = $_POST['course_code'];

    $sql = "INSERT INTO courses (course_name, course_code) VALUES ('$course_name', '$course_code')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index_course.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
