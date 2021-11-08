<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
</head>
<body>
    <h1>Ex2</h1>
    <?php
        /* Fes una funció per calcular l’àrea d’un rectangle, 
           tenint en compte que la mida dels costats es passa per get. 
           Fes una versió amb echo dins la funció i una altra amb  return. */

        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        function calcularArea($num1, $num2){ // 1) Versió amb return
            if (isset($num1) || isset($num2)){ // Comprovem que están les dues variables
                if (ctype_digit($num1) && ctype_digit($num2)){ // Comprovem que siguin números 
                    if ($num1 >= 0 && $num2 >= 0){ // Comprovem que no siguin negatius
                        $area = $num1 * $num2; // Formula per saber l'area d'un rectangle
                        return "L'area es: " .$area;
                    } else{
                        return "Té que ser valors positius";
                    }
                } else{
                    return "Té que ser números";
                }
            } else{
                return "Té que tindre valor";
            }
    
        }
        echo "<h3> RETURN </h3> ";
        echo calcularArea($num1, $num2);

        function calcularArea2($num1, $num2){ // 2) Versió amb echo
            if (isset($num1) || isset($num2)){
                if (ctype_digit($num1) && ctype_digit($num2)){
                    if ($num1 >= 0 && $num2 >= 0){
                        $area = $num1 * $num2;
                        echo "L'area es: " .$area;
                    } else{
                        echo "Té que ser valors positius";
                    }
                } else{
                    echo "Té que ser números";
                }
            } else{
                echo "Té que tindre valor";
            }
    
        }

        echo "<h3> ECHO </h3> ";
        calcularArea2($num1, $num2)
    ?>
</body>
</html>