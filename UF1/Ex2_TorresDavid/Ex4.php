<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex4</title>
</head>
<body>
    <h1>Ex4 - David Torres</h1>
    <?php 
        //Fes una pàgina on a partir d’un formulari on es recull una temperatura i en quina escala està, ens la la conversió.
        $graus = $Fahrenheit = $Celsius = $kelvin = $Fahrenheit2 = $Celsius2 = $kelvin2 = ""; 
        if ($_SERVER["REQUEST_METHOD"] == "POST") { // En cas que el request method sigui "GET", cridarà la funció test_input per cada variable
            $graus = test_input($_POST["graus"]);
            $Fahrenheit = test_input($_POST["Fahrenheit"]);
            $Celsius = test_input($_POST["Celsius"]);
            $kelvin = test_input($_POST["kelvin"]);
            $Fahrenheit2 = test_input($_POST["Fahrenheit2"]);
            $Celsius2 = test_input($_POST["Celsius2"]);
            $kelvin2 = test_input($_POST["kelvin2"]); 
            }
            
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h2> FORMULARI </h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <input type="radio" name="Fahrenheit" value="female">Fahrenheit
    <input type="radio" name="Celsius" value="male">Celsius
    <input type="radio" name="kelvin" value="other">kelvin
    <br>
    <br>
    GRAUS: <input type="text" name="graus">
    <br>
    <br>
    <input type="radio" name="Fahrenheit2" value="female">Fahrenheit
    <input type="radio" name="Celsius2" value="male">Celsius
    <input type="radio" name="kelvin2" value="other">kelvin
    <br><br>
    <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
        echo "<h2> RESULTAT </h2>"; 
        if ($Fahrenheit && $Celsius2){ // Depenèn de les posibilitas, es una condició diferent amb les formules corresponents
            $Form = ($graus - 32) * 5 / 9;
            echo $Form;
        }
        if ($Fahrenheit && $kelvin2){
            $Form = ($graus - 32) * 5 / 9 + 273.15;
            echo $Form;
        }
        if ($Celsius && $Fahrenheit2){
            $Form = ($graus * 9 / 5) + 32;
            echo $Form;
        }

        if ($Celsius && $kelvin2){
            $Form = $graus + 273.15;
            echo $Form;
        }

        if ($kelvin && $Fahrenheit2){
            $Form = ($graus - 273.15) * 9 / 5 + 32;
            echo $Form;
        }

        if ($kelvin && $Celsius2){
            $Form = $graus - 273.15 ;
            echo $Form;
        }


    ?>
</body>
</html>