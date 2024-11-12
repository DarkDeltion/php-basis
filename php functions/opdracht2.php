<?php

function checkdeelbaar($cijfer) {
    if (!is_numeric($cijfer)) {
        echo "voer alleen nummers in.";
        return false; // Geef false terug als de invoer geen nummer is
    }

    $deelbaar3 = $cijfer % 3 == 0; // Controleer deelbaarheid door 3
    $deelbaar5 = $cijfer % 5 == 0; // Controleer deelbaarheid door 5

    return [$deelbaar3, $deelbaar5]; // Geef beide resultaten terug als een array
}

while (true) {
    $cijfer = readline("Kies een nummer (of typ 'stop' om te stoppen): ");

    if (strtolower($cijfer) === 'stop') { // Controleer of de gebruiker 'exit' heeft ingevoerd
        break;
    }

    list($d3, $d5) = checkdeelbaar($cijfer); // Roep de functie aan en unpack de resultaten

    if ($d3 === true && $d5 === true) {
        echo "De cijfer die je hebt ingevoerd is deelbaar in 3 en 5.\n";    
    } elseif ($d3 === false && $d5 === false) {
        echo "De cijfer die je hebt ingevoerd is niet deelbaar in 3 en 5.\n";    
    } elseif ($d3 === false && $d5 === true) {
        echo "De cijfer die je hebt ingevoerd is niet deelbaar in 3 maar wel deelbaar in 5.\n";    
    } elseif ($d3 === true && $d5 === false) {
        echo "De cijfer die je hebt ingevoerd is wel deelbaar in 3 maar niet deelbaar in 5.\n";
    }
}
?>