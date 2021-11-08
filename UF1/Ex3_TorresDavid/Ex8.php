<?php
    $a = array(
        "a" => array(
            "b" => 0,
            "c" => 1
        ),
        "b" => array(
            "e" => 2,
            "o" => array(
                "b" => 3
            )
        )
    );

    foreach ($a as $key => $value) {foreach ($value as $key => $val) {foreach ($val as $key => $v) {print_r($v);}}} // Amb tres foreach visualitzarem el últim resultat que és el valor de b

?>



<?php
    require('Ex1.php')
?>