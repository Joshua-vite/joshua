<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM courses WHERE id=$id";
$result = $conn->query($sql);
$course = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h2 class="text-3xl text-center font-bold mb-6">Edit Course</h2>
        <form action="update_course.php" method="post" class="bg-white shadow-md rounded-lg p-6">
            <input type="hidden" name="id" value="<?php echo $course['id']; ?>">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Course Name:</label>
                <input type="text" name="course_name" value="<?php echo $course['course_name']; ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Course Code:</label>
                <input type="text" name="course_code" value="<?php echo $course['course_code']; ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update Course</button>
                <a href="index_course.php" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
