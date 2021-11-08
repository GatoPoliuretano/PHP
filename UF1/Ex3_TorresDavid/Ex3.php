<?php 
    $Temperatures_en_Farenheit = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    sort($Temperatures_en_Farenheit); // Ordenarem les temperatures amb sort
    $reverse = array_reverse($Temperatures_en_Farenheit); // Invertirem l'array amb reverse
    $fredes = "";
    $calides = "";
    for ($i = 0; $i <= 4; $i++){
        $celsius = ($Temperatures_en_Farenheit[$i] - 32) * 5 / 9; // Pasarem Farenheit a celsius 
        $celsius2 = ($reverse[$i] - 32) * 5 / 9; 
        $fredes.=intval($celsius).','; // Assignarem el celsius a fredes perquè només agafa els 5 primers elements (més frets)
        $calides.=intval($celsius2).','; // Assignarem el reverse per les mes càlides que en aquest cas agafa els 5 últims (més càlides)
    }

    echo "La mitjàna és : ${avg}";
    echo "<br>";
    echo "<br>";
    echo "Les 5 més fredes: ${fredes}";
    echo "<br>";
    echo "<br>";
    echo "Les 5 més càlides: ${calides}";

    
    
    

?>


<?php
    require('Ex1.php')
?>