<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
</head>
<body>
    <h1>Ex3 - David Torres</h1>

    <?php
    /* Utilitzant un array de 2 dimensions amb el mesos i el nombre de dies corresponent. 
       Fes una funció que donat un mes que passem per get ens digui quants dies té. 
       Les dades provindran d’un formulari on amb un select tries el mes. */


      function calculaDia($select, $diesMesos){
        switch ($select){ // Utilizarem un switch per determinar els diversos "casos"
            case 'Gener':
                echo "El mes de Gener hi ha " . $diesMesos[0][1] ." dies"; // Depén del valor del select, mostrarà els dies del mes seleccionat utilitzan l'array de dos dimensions
                break;
            case 'Febrer':
                echo "El mes de Febrer hi ha " . $diesMesos[1][1] ." dies";
                break;
            case 'Març':
                echo "El mes de Març hi ha " . $diesMesos[2][1] ." dies";
                break;
            case 'Abril':
                echo "El mes de Abril hi ha " . $diesMesos[3][1] ." dies";
                break;
            case 'Maig':
                echo "El mes de Maig hi ha " . $diesMesos[4][1] ." dies";
                break;
            case 'Juny':
                echo "El mes de Juny hi ha " . $diesMesos[5][1] ." dies";
                break;
            case 'Juliol':
                echo "El mes de Juliol hi ha " . $diesMesos[6][1] ." dies";
                break;
            case 'Agost':
                echo "El mes de Agost hi ha " . $diesMesos[7][1] ." dies";
                break;
            case 'Setembre':
                echo "El mes de Setembre hi ha " . $diesMesos[8][1] ." dies";
                break;
            case 'Octubre':
                echo "El mes de Octubre hi ha " . $diesMesos[9][1] ." dies";
                break;
            case 'Novembre':
                echo "El mes de Novembre hi ha " . $diesMesos[10][1] ." dies";
                break;
            case 'Desembre':
                echo "El mes de Desembre hi ha " . $diesMesos[11][1] ." dies";
                break;
         }
      }

        $diesMesos = array( // Definim l'array de dos dimensions que conté els mesos i els seus dies corresponents
            array("Gener",31),
            array("Febrer", 28),
            array("Març", 31),
            array("Abril", 30),
            array("Maig", 31),
            array("Juny", 30),
            array("Juliol", 31),
            array("Agost", 31),
            array("Setembre", 30),
            array("Octubre", 31),
            array("Novembre", 30),
            array("Desembre", 31)
        );

        $select = "";
        if ($_SERVER["REQUEST_METHOD"] == "GET") { // En cas que el request method sigui "GET", cridarà la funció test_input per cada variable
            $select = test_input($_GET["select"]);
            }
            
            function test_input($data) { // Aquesta funció es per comprovar i corregeix cada valor de les variables si conté algun error
            $data = trim($data); // El trim elimina espais en blanc
            $data = stripslashes($data); // stripslashes treu les barres d'un string amb cometes 
            $data = htmlspecialchars($data); // htmlspecialchars converteix els caràcters especials en entitats HTML
            return $data;
            }
    ?>

    <h2> FORMULARI </h2>
    <!-- Definim el formulari amb el method "GET" --->
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <select name="select">
        <option value="Gener">Gener</option>
        <option value="Febrer">Febrer</option>
        <option value="Març">Març</option>
        <option value="Abril">Abril</option>
        <option value="Maig">Maig</option>
        <option value="Juny">Juny</option>
        <option value="Juliol">Juliol</option>
        <option value="Agost">Agost</option>
        <option value="Setembre">Setembre</option>
        <option value="Octubre">Octubre</option>
        <option value="Novembre">Novembre</option>
        <option value="Desembre">Desembre</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
    echo "<h2> RESULTAT </h2>";
    calculaDia($select, $diesMesos);

    ?>
</body>
</html>