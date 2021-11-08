<?php
    /* Escriviu un programa PHP per canviar tots els valors de l’array següent a majúscules o minúscules. */
    $color = array ('A' => 'Blau', 'B' => 'Verd', 'c' => 'Vermell');
    $color = array_map('strtoupper', $color); // Canviarem a màjuscules els valors de cada key amb array_map aixì indicàn el strtoupper
    print_r($color);
    
?>





<?php
    require('Ex1.php')
?>