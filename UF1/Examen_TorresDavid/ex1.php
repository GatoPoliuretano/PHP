<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1 - PHP</title>
</head>
<body>
    <h1> EXERCICI 1 - PHP </h1>

    <?php
        
        include 'header.php';
        $arraySencers = []; // l'array de sencers és global
        $aEn = []; // l'array associatiu també és global
        
        function generaArray($mida) {
            global $arraySencers;
            global $aEn;
            for ($i = 0; $i < $mida; $i++){
                $num_aleatori = rand(100,999);
                array_push($arraySencers, $num_aleatori);
                array_push($aEn, $num_aleatori);
            }
        }

    
        generaArray(100);
        
        print_r($arraySencers);

        function printArray($a) {
            $text = "";
            foreach($a as $array) {
                $text = $text.$array.",";
            }
            for ($i = 0; $i < 10; $i++){
                echo "<ul> <li> $text </li> </ul>";
            }

        }

        printArray($arraySencers);


      /*   function acabaEn($a) {
            foreach ($a as $key => $value) {
                ksort($value);
                for ($i = 0; $i < strlen($value); $i++) { 
                    echo $value[$i];
                }

            }
        }


        acabaEn($aEn);

        function mostraAcabaEn($aEn) {

        } */

        function numGET($a) {
            if (isset($_GET['num'])) {
                if (strlen($_GET['num']) == 3) {
                    array_push($a, $_GET['num']);
                } else {
                    return "Incorrecte";
                }
            }
        }

        numGET($arraySencers);
    
    ?>
</body>
</html>