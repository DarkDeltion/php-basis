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

    // Zoek gebruiker op basis van username
    $query = "SELECT * FROM login WHERE username = ?";
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Verifieer het ingevoerde wachtwoord met de gehashte versie
        if (password_verify($password, $row['password'])) {
            echo "<h1>Welkom, " . htmlspecialchars($username) . "!</h1>";
        } else {
            // Ongeldig wachtwoord
            header("Location: login-verkeert.php");
            exit();
        }
    } else {
        // Gebruiker niet gevonden
        header("Location: login-verkeert.php");
        exit();
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($mysqli);
?>