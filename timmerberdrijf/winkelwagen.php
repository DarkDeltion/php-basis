<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>winkelwagen</title>
</head>
<body>    
    <?php
    $totaal = 0;

    $berken = $grenen = $hardhout = "";

    $rechthoekig = $ronde = "";

    $breedte = $lengte = $diameter = "";

    $berkenerr = $grenenerr = $hardhouterr = $rechthoekigerr = $rondeerr = "";

    $berkenprijs = 9.50;
    $grenenprijs = 8.50;
    $hardhoutprijs = 11.50;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        if(isset($_POST["Berken"])){
            if(isset($_POST["rechthoekig"])){
                $breedte = $_POST["breedte"] / 1000;
                $lengte = $_POST["lengte"] / 1000;
                $opervlakte = $lengte * $breedte;
                $totaal = $opervlakte * $berkenprijs;

                echo "$opervlakte vierkante meter <br>";
                echo "$totaal euro <br>";
            }
            if(isset($_POST["ronde"])){
                $diameter = $_POST['Diameter'] / 1000;
                $oppervlakte = pi() * $diameter;
                $totaal = $oppervlakte * $berkenprijs;
                
                echo "$oppervlakte vierkante meter <br>";
                echo "$totaal euro <br>";
            }
        }

        if(isset($_POST["grenen"])){
            if(isset($_POST["rechthoekig"])){
                $breedte = $_POST["breedte"] / 1000;
                $lengte = $_POST["lengte"] / 1000;
                $opervlakte = $lengte * $breedte;
                $totaal = $opervlakte * $grenenprijs;

                echo "$opervlakte vierkante meter <br>";
                echo "$totaal euro <br>";
            }
            if(isset($_POST["ronde"])){
                $diameter = $_POST['Diameter'] / 1000;
                $oppervlakte = pi() * $diameter;
                $totaal = $oppervlakte * $grenenprijs;
                
                echo "$oppervlakte vierkante meter <br>";
                echo "$totaal euro <br>";
            }
        }

        if(isset($_POST["hardhout"])){
            if(isset($_POST["rechthoekig"])){
                $breedte = $_POST["breedte"] / 1000;
                $lengte = $_POST["lengte"] / 1000;
                $opervlakte = $lengte * $breedte;
                $totaal = $opervlakte * $hardhoutprijs;

                echo "$opervlakte vierkante meter <br>";
                echo "$totaal euro <br>";
            }
            if(isset($_POST["ronde"])){
                $diameter = $_POST['Diameter'] / 1000;
                $oppervlakte = pi() * $diameter;
                $totaal = $oppervlakte * $hardhoutprijs;
                
                echo "$oppervlakte vierkante meter <br>";
                echo "$totaal euro <br>";
            }
        }
    }   

    ?>
</body>
</html>