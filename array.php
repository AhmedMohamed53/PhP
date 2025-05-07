<?php  
$programmeertalen = ["PHP", "C#", "HTML", "JavaScript", "Java", "C++", "C"];  



sort($programmeertalen);  


$aantaltalen = count($programmeertalen);  


echo "Gesorteerde programmeertalen:\n";  
foreach ($programmeertalen as $taal) {  
    echo $taal . "\n";  
}  

echo "Aantal programmeertalen: " . $aantaltalen . "\n";  
?>