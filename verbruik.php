<?php

echo "Geef het aantal liter in de tank voor de rit: ";
$aantalLiterinTankVoorRit = trim(fgets(STDIN)) ;

echo "Geef het aantal liter in de tank na de rit: ";
$aantalLiterinTankNaRit = trim(fgets(STDIN)) ;

echo "Geef de kilometerstand bij aanvang van de rit: ";
$kilometerstandVoorRit = trim(fgets(STDIN)) ;

echo "Geef de kilomterstand aan het einde van de rit: ";
$kilometerstandNaRit = trim(fgets(STDIN)) ;


 echo (100 * ($aantalLiterinTankVoorRit - $aantalLiterinTankNaRit) / ($kilometerstandNaRit - $kilometerstandVoorRit))
?>