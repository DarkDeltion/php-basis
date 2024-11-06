<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>login</h1>
        <form action="./login.php" method="post">
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>