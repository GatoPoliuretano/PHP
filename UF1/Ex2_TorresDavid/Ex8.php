<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex8</title>
</head>
<body>
    <h1>Ex8 - David Torres</h1>
    <?php
        /* Fes un programa per fer una calculadora amb botons */
        $num1 = $num2 = $resultat = $suma = $resta = $mul = $div =  "";
        if ($_SERVER["REQUEST_METHOD"] == "GET") { // En cas que el request method sigui "GET", cridarà la funció test_input per cada variable
            $num1 = test_input($_GET["num1"]);
            $num2 = test_input($_GET["num2"]);
            $resultat = test_input($_GET["resultat"]);
            $suma = test_input($_GET["suma"]);
            $resta = test_input($_GET["resta"]);
            $mul = test_input($_GET["mul"]);
            $div = test_input($_GET["div"]);
            }

            function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }
    ?>

    <h2> PHP - CALCULADORA </h2>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    NUMERO 1: <input type="text" name="num1">
    <br>
    <br>
    NUMERO 2: <input type="text" name="num2">
    <br>
    <br>
    <input type="submit" name="suma" value="suma">
    <input type="submit" name="resta" value="restar">
    <input type="submit" name="mul" value="multiplicar">
    <input type="submit" name="div" value="dividir">
    <h3> RESULTAT </h3>
    <?php
       if ($suma){ // Depenèn del botó clicat, cridarà la condició corresponent 
           echo $num1 + $num2;
       }
       if ($resta){
        echo $num1 - $num2;
       }
       if ($mul){
        echo $num1 * $num2;
       }
       if ($div){
        echo $num1 / $num2;
       } 
    ?>
</body>
</html>