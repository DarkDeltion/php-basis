<?php
    // temp inlog
    $username = "admin";
    $password = "admin";

    $user = $_POST["username"];
    $pass = $_POST["password"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["submit"])) {
            if ($user == $username && $pass == $password) {
                echo "Welkom $username";
            } else {
                echo "Username of Wachtwoord is verkeert.";

                echo "
                        <form action='./index.php' method='post'> <br>
                            <input type='submit' name='submit' value='opnieuw proberen'>
                        </form>
                    ";
            }
        }
    }
    ?>