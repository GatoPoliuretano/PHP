<?php
    $keys = array(
        "field1"=>"first",
        "field2"=>"second",
        "field3"=>"third"
    );

    $values = array(
        "field1value"=>"dinosaur",
        "field2value"=>"pig",
        "field3value"=>"platypus"
    );

    $valorKey = array();
    $valorValue = array();

    foreach ($keys as $key => $value){array_push($valorKey, $value);}
    foreach ($values as $key => $value) {array_push($valorValue, $value);} // Assignarem els valors a cada array corresponent
    $c = array_combine($valorKey, $valorValue); // Amb array_combine, agafarà com a key els valors de valorKey i com valor de valorValue

    print_r($c);

    
?>



<?php
    require('Ex1.php')
?>