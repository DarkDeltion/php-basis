<?php
    // temp inlog
    $username = "admin";
    $password = "admin";

    $user = $_POST["username"];
    $pass = $_POST["password"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["submit"])) {
            if ($user == $username && $pass == $password) {
                echo "inloggen gelukt";
            } else {
                echo "inloggen mislukt";
            }
        }
    }
    ?>