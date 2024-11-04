<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>about hout</h1>

    <form action="./winkelwagen.php" method="post">
        
        <img src="./img/berken.jpg" alt=""><br>
        <input type="checkbox" id="Berken" name="Berken">
        <label for="Berken">Berken - prijs per m2 € 9,50</label> <br> <br>


        <img src="./img/grenen.jpg" alt=""><br>
        <input type="checkbox" id="grenen" name="grenen">
        <label for="grenen">Grenen - prijs per m2 € 8,50</label> <br> <br>
        
        
        <img src="./img/hardhout.jpg" alt=""><br>
        <input type="checkbox" id="hardhout" name="hardhout">
        <label for="hardhout">Hardhout - prijs per m2 € 11,50</label> <br> <br>
        
        <br><br>
        
        <input type="checkbox" id="rechthoekig" name="rechthoekig">
        <label for="rechthoekig">Ik wil een rechthoekige tafel</label>
        
        <br><br>
        
        <label for="breedte">Breedte in mm</label>
        <input type="text" id="breedte" name="breedte">
        
        <br><br>
        
        <label for="lengte">lengte in mm</label>
        <input type="text" id="lengte" name="lengte">
        
        <br><br><br>
        
        <input type="checkbox" id="ronde" name="ronde">
        <label for="ronde">Ik wil een ronde tafel </label>
        
        <br><br>
        
        <label for="Diameter">Diameter in mm</label>
        <input type="text" id="Diameter" name="Diameter">
        
        <br><br>
        
        <input type="submit" value="submit">
    </form>
</body>
</html>