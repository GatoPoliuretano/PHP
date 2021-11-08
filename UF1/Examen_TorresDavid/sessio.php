<?php
    session_start();
    $usuari = "alumne";
    $pw = "0000";


    if (isset($_POST['usuari']) && isset($_POST['pw'])) {
        if (($_POST['usuari'] == $usuari) && ($_POST['pw'] == $pw)) {
            $_SESSION['usuari'] = "alumne";
            header("Location:ex1.php");

        } else {
            $_SESSION['missatge'] = "Aquest usuari no està registrat a la nostra web o el pasword és incorrecte";
            header("Location:index.php");
        }

    } else {
        header("Location:index.php");
    }
?>
