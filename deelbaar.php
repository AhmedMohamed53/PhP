<?php

echo "Schrijf even de deeltal : " ;
$deeltal = trim(fgets(STDIN)) ;

echo "Dan moet je de deler schrijven : " ;
$deler = trim(fgets(STDIN)) ;

if ($deeltal % $deler == 0){
    echo "De getal is" . " " . $deeltal / $deler . " ". " en het is een geheel getal";
}
else {
    echo "De getal is " . " " . $deeltal / $deler . " " . "en het is een komma getal" ;
}
?>