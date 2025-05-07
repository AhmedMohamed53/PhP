<?php  
 
function berekenCirkel($diameter) {  
    $straal = $diameter / 2;  
    $omtrek = 2 * pi() * $straal;  
    $oppervlakte = pi() * ($straal * 2);  
    
    return array($omtrek, $oppervlakte);  
}  

 
echo "Voer de diameter van de cirkel in: ";  
$diameter = trim(fgets(STDIN)); 

if (is_numeric($diameter) && $diameter > 0) {  
    list($omtrek, $oppervlakte) = berekenCirkel($diameter);  
 
    printf("De omtrek van de cirkel is: %.2f\n", $omtrek);  
    printf("De oppervlakte van de cirkel is: %.2f\n", $oppervlakte);  
} else {  
    echo "Voer een geldige positieve getal in voor de diameter.\n";  
}  
?>  