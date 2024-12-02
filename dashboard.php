<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-500 text-white h-screen p-6">
            <h2 class="text-2xl font-bold mb-6">Dashboard</h2>
            <nav>
                <ul>
                    <li><a href="index_course.php" class="block py-2 hover:bg-blue-700">Courses</a></li>
                    <li><a href="index.php" class="block py-2 hover:bg-blue-700">Students</a></li>
                    <li><a href="logout.php" class="block py-2 hover:bg-blue-700">Logout</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h2 class="text-3xl font-bold">Welcome to the Dashboard!</h2>
            <p class="mt-4">Here you can manage students, courses, and more.</p>
        </div>
    </div>
</body>
</html>
