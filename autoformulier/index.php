<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoformulier</title>
</head>
<body>
    <h1>kies een auto</h1>

    <form action="./auto.php" method="post">
        <input type="checkbox" id="audi" name="audi">
        <label for="audi"> audi</label> <br>
        <input type="checkbox" id="miata" name="miata">
        <label for="miata">miata</label> <br>
        <input type="checkbox" id="subaru" name="subaru">
        <label for="subaru">subaru</label> <br><br>
        
        <input type="submit" value="submit">
    </form>
</body>
</html>