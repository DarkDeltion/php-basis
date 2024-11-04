<?php
$kleur = isset($_POST['kleur']) ? $_POST['kleur'] : 'white';

if($kleur === "red"){
    echo "De kleur is rood";
} elseif($kleur === "blue"){
    echo "De kleur is blauw";
} elseif($kleur === "yellow"){
    echo "De kleur is geel";
} elseif($kleur === "pink"){
    echo "De kleur is roze";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo htmlspecialchars($kleur); ?>;
            color: black;
        }
    </style>
</head>
<body>
    <form action="./index.php">
        <input type="submit" value="Klik hier om terug te gaan">

    </form>
</body>
</html>
