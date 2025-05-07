<?php

echo "Hoeveel knikkers zitten er in de zak :  " ;
$knikkers = trim(fgets(STDIN)) ;

echo "Voer het aantal knikkers in : ";
$veel = trim(fgets(STDIN)) ;
if ($knikkers >= $veel){
    echo "Je hebt $veel gegooid, nog " . $knikkers - $veel . " In je zak";
}

else {
    echo "Je hebt alleen $knikkers knikkers in je zak" ;
}

?>