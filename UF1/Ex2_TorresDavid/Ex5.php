<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex5</title>
</head>
<body>
    <h1>Ex5 - David Torres</h1>
    <?php
        /* Fes una funció per comprovar si un string està en minúscules (utilitza només les funcions que hem après a classe) */

        $Cadena = "hola"; 
        function esMajuscula($cadena){
            if ($cadena == strtolower($cadena)){ // Amb strlower podem verificar si está en minuscula comparàn el string
                return "String Minuscula";
            } else {
                return "String Majuscula";
            }
        }
        echo esMajuscula($Cadena)     
    ?>
    
</body>
</html>