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
    <title>home</title>
</head>
<body>
    <h1>Welkom bij Home!</h1>
    <a href="./index.php">klik hier om weer terug te gaan naar de inlog pagina</a>
</body>
</html>