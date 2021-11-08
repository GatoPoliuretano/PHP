<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex6</title>
</head>
<body>
    <h1>Ex6</h1>
    <?php
        /* Fes una funció per comprovar si un string és un palíndrom o no */
        $paraula = "ana";
        function palidrom($Paraula){
            $paraulaReves = strrev($Paraula); // Amb strrev, invertirem el string
            $string_reverse = str_split($paraulaReves); // str_split separarem els caràcters
            $palidrom = ''; 
            foreach($string_reverse as $valor){ // Utilizarem un foreach ja que em convertit el string en un array i string_reverse la nomanem com a valor
                $palidrom.= $valor; // Concatarem palidrom amb valor
            }

            if($Paraula == $palidrom){ // Compararem la variable paraula amb palidrom per determinar si es palidrom o no
                return "Es un palidrom";
            } else {
                return "No es un palidrom"; 
            }
        }

        echo palidrom($paraula)
    ?>
</body>
</html>