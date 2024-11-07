<?php
// Database connection
$servername = "localhost";
$username = "root";  // Your database username
$password = "";      // Your database password
$dbname = "user_data"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// --- Fetch all users and hash their passwords ---
$sqlSelect = "SELECT id, username, password FROM login";
$result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Get the current password for each user
        $userId = $row['id'];
        $currentPassword = $row['password'];

        // Hash the password
        $hashedPassword = password_hash($currentPassword, PASSWORD_DEFAULT);

        // Update the database with the hashed password
        $sqlUpdate = "UPDATE login SET password = '$hashedPassword' WHERE id = $userId";

        if ($conn->query($sqlUpdate) === TRUE) {
            echo "Password for user " . $row['username'] . " updated successfully.<br>";
        } else {
            echo "Error updating password for user " . $row['username'] . ": " . $conn->error . "<br>";
        }
    }
} else {
    echo "No users found.<br>";
}

// Close connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h1>
        <?php
        
        
        ?>
    </h1>

    <h1>inloggen</h1>
    
    <form method="post">
        <label for="username">username</label>
        <input type="text" name="username" id="username" required>
        <br><br>    
        <label for="password">password</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
</body>
</html>