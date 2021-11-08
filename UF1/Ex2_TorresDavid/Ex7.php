<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex7</title>
</head>
<body>
    <h1>Ex7 - David Torres</h1>
    <?php
        /* Fes un programa en php que pinti un tauler d’escacs per pantalla. */

        $blanc="____"; // Definim els simbols que determinaran els cuadrats blancs i negres
        $negre= "███";

        for ($i=1; $i <=4 ; $i++) { // Assignarem una matriu per fer la taula, començarem per les files
            echo "<br>";
            for ($j=1; $j <=4 ; $j++) { // Després per les columnes
                echo $blanc;
                echo $negre;
            }
            echo "<br>";
            for ($y=1; $y <=4 ; $y++) {  
                echo $negre;
                echo $blanc;
            }
         
        }

    ?>
</body>
</html>