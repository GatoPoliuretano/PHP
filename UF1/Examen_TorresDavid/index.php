<?php
    session_destroy();
?>

<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="utf-8" />
        <title> Examen Formulari </title>
    </head>
    <body>
        <form action="sessio.php" method="POST">
            Usuari:  
            <p> 
                <input type="text" name="usuari"/>
            </p>

            Password:
            <p> 
                <input type="password" name="pw"/>
            </p>
            
            <p>
                <input type="submit" value="enviar"/>
            </p>

        </form>
        <?php 
            if (!(isset($_SESSION['usuari']) && ($_SESSION['usuari'] == "alumne"))) {
                echo "On vas?? Primer t’has  de registrar";
            }


        ?>
    </body>