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
    session_start();

    if(isset($_POST["username"]) && isset($_POST["password"])) {
        if($_POST['username'] == 'admin' AND $_POST['password'] == '1234') {
            $_SESSION['loggedin'] = true;
            header('location: login.php');
            exit(); // Add exit after redirect
        } else {
            // Clear any existing session when login fails
            session_unset();
            session_destroy();
            header('location: login-verkeert.php');
            exit(); // Add exit after redirect
        }
    }
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