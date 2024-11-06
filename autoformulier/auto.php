<?php

echo "Autos!! <br>";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["audi"])) {
        for ($i1 = 1; $i1 <= 3; $i1++) {
            $pathaudi = "./images/audi{$i1}.jpg";
            if (file_exists($pathaudi)) {
                echo "<img src='{$pathaudi}' alt='Afbeelding Audi {$i1}'>";
            }
        }
    }

    if (isset($_POST["miata"])) {
        for ($i2 = 1; $i2 <= 3; $i2++) {
            $pathmiata = "./images/miata{$i2}.jpg";
            if (file_exists($pathmiata)) {
                echo "<img src='{$pathmiata}' alt='Afbeelding Miata {$i2}'>";
            }
        }        
    }

    if (isset($_POST["subaru"])) {
        for ($i3 = 1; $i3 <= 3; $i3++) {
            $pathsubaru = "./images/subaru{$i3}.jpg";
            if (file_exists($pathsubaru)) {
                echo "<img src='{$pathsubaru}' alt='Afbeelding Subaru {$i3}'>";
            }
        }        
    }
}
?>