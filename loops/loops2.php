<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php loop2</title>
</head>
<body>
    <div id="imageContainer">
        <?php
        // pas aan hoeveel foto's je hebt.
        $aantalAfbeeldingen = 5; 

        // loop voor de images. zorgt er voor dat hij tot 5 fotos gaat en dan er een 1tje toevoegt.
        for ($i = 1; $i <= $aantalAfbeeldingen; $i++) {
            
            // de path naar de foto's
            $imagePath = "./images/afb{$i}.jpg";

            // zorgt er voor dat de fotos bestaan en laat ze zien via een echo.
            if (file_exists($imagePath)) {
                echo "<img src='{$imagePath}' alt='Afbeelding {$i}'>";
            } 
        }
        ?>
    </div>
</body>
</html>
