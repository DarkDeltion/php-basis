<?php
function berekencijfer($maxpunten, $behaaldepunten){
    if (!is_numeric($maxpunten) || !is_numeric($behaaldepunten) || $maxpunten == 0) {
        return false;
    }

    $cijfer = ($behaaldepunten / $maxpunten) * 10;

    return round($cijfer, 2);
}



$maxpunten = readline("Wat zijn de maximale punten die u kunt halen?\n");
$behaaldepunten = readline("Wat zijn de punten die u heeft gehaald?\n");

$resultaat = berekencijfer($maxpunten, $behaaldepunten);



if($resultaat === false){
    echo "Voer een geldige invoer.\n";
} else {
    echo "Je cijfer is een $resultaat!\n";
}
?>