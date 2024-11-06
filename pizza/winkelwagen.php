<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>winkelwagen</title>
</head>
<body>
    <h3>bedankt voor u bestelling!</h3>
    <?php
    $totaal = 0;

    $Spianata = $Seppi = $Tirato = "";

    $olijven = $kaas= $bezorgen = "";

    $Spianataprijs = 12.50;

    $Seppiprijs = 11.50;

    $Tiratoprijs = 10.50;

    $olijvenprijs = 2.50;

    $kaasprijs = 1.50;

    $bezorgenprijs = 3.50;

    // main code

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["Spianata"])){
            $totaal = $totaal + $Spianataprijs;
            echo "U heeft een pizza Spianata piccante: € 12,50<br>";

        }

        if(isset($_POST["Seppi"])){
            $totaal = $totaal + $Seppiprijs;
            echo "U heeft een pizza Seppi: € 11,50<br>";
        }

        if(isset($_POST["Tirato"])){
            $totaal = $totaal + $Tiratoprijs;
            echo "U heeft een pizza Tirato: € 10,50<br>";

        }

        if(isset($_POST["olijven"])){
            $totaal = $totaal + $olijvenprijs;
            echo "U heeft een pizza olijven: € 2,50<br>";
        }

        if(isset($_POST["kaas"])){
            $totaal = $totaal + $kaasprijs;
            echo "U heeft een pizza kaas: € 1,50<br>";
        }

        if(isset($_POST["bezorgen"])){
            echo "U wilt de pizza laten bezorgen: € 3,50<br>";
            $totaal = $totaal + $bezorgenprijs;
            echo "Als de pizzabezorger komt moet u € $totaal betalen!<br>";
        } else{
            echo "U komt de pizza zelf afhalen<br>";
            echo "U betaalt € $totaal aan onze kassa!<br>";
        }   
    }
    ?>
</body>
</html>