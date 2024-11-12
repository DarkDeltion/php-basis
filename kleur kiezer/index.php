<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>color picker</ti tle>
</head>
<body>
    <h1>kies een kleur</h1>

    <form action="./kleur.php" method="post">
        <label for="Kleur">kies een kleur</label>
        <select name="kleur" id="kleur">
            <option value="red">red</option>
            <option value="blue">blue</option>
            <option value="yellow">yellow</option>
            <option value="pink">pink</option>
        </select> <br>
        <input type="submit" value="Submit Query">
    </form>
</body>
</html>