<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EX1 - David Torres</h1>
    <?php
        $cadena = "Hola que tal?";
        $tipusCadena = gettype($cadena);

        $sencer = 123;
        $tipusSencer = gettype($sencer);

        $pi = 3.14;
        $tipusDouble = gettype($pi);

        $boolea = true;
        $tipusBoolea = gettype($boolea);

        $null = null; 
        $tipusNull = gettype($null);

        $marques = array("Apple", "Xiaomi", "Samsung");
        $tipusArray = gettype($marques);

        $obj = new stdClass;
        $tipusObjecte = gettype($obj);

        $fp = tmpfile();
        $tipusResorce = gettype($fp);

        $ID = fopen('ID.txt', 'r');
        fclose($ID);    
        $tipusUnknown = gettype($ID);

        $Aleatori = " ";
        $tipusAleatori = gettype($Aleatori);


        echo "<h3> Ex1 <h3>";
        echo "<ol>"
            ."<li> Hola que tal? - $tipusCadena"
            ."<li> 123 - $tipusSencer"
            ."<li> *Espai* - $tipusAleatori"
            ."<li> 3.14 - $tipusDouble"
            ."<li> True/False - $tipusBoolea"
            ."<li> NULL - $tipusNull"
            ."<li> ('Apple', 'Xiaomi', 'Samsung') - $tipusArray"
            ."<li> new stdClass - $tipusObjecte"
            ."<li> tmpfile() - $tipusResorce"
            ."<li> fopen('qualsevol arxiu') - $tipusUnknown"
            ."</ol>";

    ?>
</body>
</html>
