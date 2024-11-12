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
        $aantalAfbeeldingen = 5; 
        for ($i = 1; $i <= $aantalAfbeeldingen; $i++) {
            $imagePath = "./images/afb{$i}.jpg";
            if (file_exists($imagePath)) {
                echo "<img src='{$imagePath}' alt='Afbeelding audi'>";
            } 
        }
        ?>
    </div>
</body>
</html>