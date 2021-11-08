<!DOCTYPE html>
<?php
    session_start();
    if (!(isset($_SESSION['usuari']) && ($_SESSION['usuari'] == "alumne"))) {
        header("Location:index.php");
    }

    if (isset($_COOKIE['visites'])) {
        $visites = $_COOKIE['visites'] + 1;
        setcookie("visites",$visites);
    
    } else {
        $visites = 1;
        setcookie("visites",$visites, time()+259200) ;
    }


?>
            
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Header Examen </title>
    <style type="text/css">
        p {
            text-align: right;
        }
        
    </style>
</head>
<body>
    <?php 
        if ($visites == 1) {
            echo "Benvingut a la web";
        } else {
            echo "<p > Visites a la web: ${visites} <p>";
        }
                   
    ?> 
    


    <h1> Index Exercicis </h1>
    <hr>
    <ul>
        <li> <a href="ex1.php"> Exercici 1 </a></li>
        <li> <a name="logout" href="index.php"> Logout </a></li>
    </ul>
    
</body>
</html>