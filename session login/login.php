<?php 
session_start();
if(!isset($_SESSION['loggedin'])) {
    header('location: index.php');
}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    </h1>

    <a href="./home.php">klik hier om naar home te gaan!</a>
</body>
</html>