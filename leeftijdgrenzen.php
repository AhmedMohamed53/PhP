<?php

echo "Hoe oud ben jij". "\n" ;

$leeftijd = trim(fgets(STDIN)) ;
$gefelicteerd = [10, 16, 18, 50, 67, 100];  

if ($leeftijd  <=9)  {
echo "Je bent te jong voor deze programma";
}
else if ($leeftijd >9 && $leeftijd <118){
echo "Deze programma is perfect voor u". "\n" ;
}
else if ($leeftijd >118) {
echo "Je bent te oud" ;
}

if (in_array($leeftijd , $gefelicteerd)  ) {
echo "Gefelicteerd Je bent $leeftijd jaar oud.". "\n" ;
}
else if ($leeftijd == 62 ) {  
    echo "Pas op je hebt nog 5 jaar tot dat je 67 jaar oud bent.\n";  
}
?>