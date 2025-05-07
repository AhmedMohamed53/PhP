<?php

$rugzak = [] ;

$rugzak[0] = "Eten" ;
$rugzak[1] = "Water";
$rugzak[2] = "Kaart";
$rugzak[3] = "Slaapzak";
$rugzak[4] = "Tent";

array_splice($rugzak,2,1) ;
$rugzak[0] = "Thee" ;
rsort($rugzak) ;
$count = count($rugzak) ;
foreach ($rugzak as $hoi) {

    echo $hoi . "\n" ;

}

echo "Er zijn $count dingen mee";
?>