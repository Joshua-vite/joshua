<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<form action="add_user.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="admin" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value="admin123" required><br>

    <button type="submit">Add User</button>
</form>

