<?php
// Verbinding met de database
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
$databaseName = 'user_data';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check of gebruikersnaam al bestaat
    $query = "SELECT * FROM login WHERE username = ?";
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        echo "Gebruikersnaam bestaat al. Kies een andere.";
        echo mysqli_num_rows($result);
        exit();
    }

    // Hash het wachtwoord
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Voeg de gebruiker toe aan de database
    $insertQuery = "INSERT INTO login (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($mysqli, $insertQuery);
    mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPassword);

    if (mysqli_stmt_execute($stmt)) {
        echo "Registratie succesvol! Je kunt nu <a href='index.html'>inloggen</a>.";
    } else {
        echo "Er is een fout opgetreden: " . mysqli_error($mysqli);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($mysqli);
?>
