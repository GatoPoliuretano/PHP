<?php
/* Crea el codi PHP que donin resposta a el següent plantejament:

Volem emmagatzemar en una matriu el nombre d'alumnes amb què compta una acadèmia, 
ordenats en funció de el nivell i de l'idioma que s'estudia. 
Hi haurà 3 files que representaran el Nivell bàsic, 
mitjà i de perfeccionament i 4 columnes en què figuraran els idiomes (0 = Anglès, 1 = Francès, 2 = Alemany i 3 = Rus). 
Es demana realitzar la declaració de la matriu i assignar-els valors indicats en la següent imatge a cada element:

Fes les següents funcions : 
comptarTotalAlumnes, presenta el total d’alumnes de l’academia
comptarTotalAIdioma, presenta el total d’alumnes per idioma ordenat de més a menys (amb un array associatiu)
buscarGrupMesNombros, presenta per pantalla el grup més nombrós
buscarGrupMenysNombros, presenta per pantalla el grup menys nombrós


*/
    $matriu = array(0 => array(1,6,3), 1 => array(14,19,13), 2 => array(8,7,4), 3 => array(3,2,1)); // Matriu introduïn arrays multidimensionals

    function comptarTotalAlumnes($m){
        $sumaTotal = array_sum($m[0]) + array_sum($m[1]) + array_sum($m[2]) + array_sum($m[3]); // Amb array_sum, sumarem tots els alumnes de cada grups d'array (Grups de classe)
        echo $sumaTotal;
    }


    function comptarTotalIdioma($m){
        $sumesArr = array();
        $Angles = array_sum($m[0]);
        $Frances = array_sum($m[1]);
        $Alemany = array_sum($m[2]);
        $Rus = array_sum($m[3]); // Sumem els alumnes de cada grup de classe
        array_push($sumesArr, $Angles, $Frances, $Alemany, $Rus); // Assignem cada suma a una array
        arsort($sumesArr); // Ordenem l'array de més gran a més petit
        print_r($sumesArr); // Mostrem resultat de l'array 
        $maxim = max($sumesArr);
        $minim = min($sumesArr);
        buscarGrupMesNombros($maxim);
        buscarGrupMenysNombros($minim);
    }

    function buscarGrupMesNombros($ma){
        echo "<br>";
        echo $ma; // Mostrem els alumnes més nombrosos amb max 
        
    }

    function buscarGrupMenysNombros($mi){
        echo "<br>";
        echo $mi; // Mostrem els alumnes menys nombrosos amb min
    }
    
    comptarTotalAlumnes($matriu);
    echo "<br>";
    comptarTotalIdioma($matriu);
    
    
?>





<?php
    require('Ex1.php')
?>