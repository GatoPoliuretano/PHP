<?php
//contador del número de accesos a una página por sesión.
session_start();
if (!isset($_SESSION["count"])) {
    $_SESSION["count"] = 0;
} else {
    $_SESSION["count"]++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ex3 PHP </title>
</head>
<body>
    <h1> EX3 </h1>
    <?php
        if(isset($_COOKIE["visites"])){
            setcookie("visites",$_COOKIE["visites"] + 1,time() + 3600 * 24);
            $missatge = "Numero de visites: ".$_COOKIE["visites"];
         
        } else {
            setcookie("visites", 1, time() + 3600 * 24);
            $missatge = "Benvingut a la nostre pàgina";
        }

        echo($missatge);

        if ($_COOKIE["visites"] >= 5){
            echo("<br>");
            echo("*");

            if ($_COOKIE["visites"] >= 10){
                echo("<br>");
                echo("*");

                if ($_COOKIE["visites"] >= 15){
                    echo("<br>");
                    echo("*");
                }
        
            }
        }

    ?>
</body>
</html>