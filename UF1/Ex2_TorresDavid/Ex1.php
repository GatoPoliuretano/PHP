<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-EX2-02</title>
</head>
<body> 
    <h1>EX1 - David Torres</h1>
    <?php 
       // Fes una funció per calcular el factorial d’un número (utilitzant un bucle) que passem per URL.
        function factorial($num){ 
            $fac = 1; // $fac serà la variable factorial
            for ($i = 1; $i <= $num; $i++){ // Reccorem fins que $i sigui igual que $num
                $fac = $fac * $i; // Després multipliquem el fac per $i per obtenir el factorial del número passat per paràmetre
            } return $fac;
        }

        $num1 = $_GET['num1'];
        echo factorial($num1) // Cridem la funció amb un valor passat per URL

    ?>
    
</body>
</html>