<?php

echo "Voer een dag in : " ;
$dag = trim(fgets(STDIN));

echo "Voer een maand in : " ;
$maand = trim(fgets(STDIN));

echo "Voer een jaar in : " ;
$jaar = trim(fgets(STDIN));

$ingevoerdedatum = DateTime::createFromFormat("d/m/Y" , "$dag/$maand/$jaar" ) ;
$vandaag = new DateTime() ; 
$eindelijk = $vandaag ->diff($ingevoerdedatum) ;

if ($ingevoerdedatum === false){
    echo "Voer een echte datum in" ; 
}
else {


   echo  $eindelijk->days . "\n" ;
}

?>