<?php

session_start();
$error = "ok";


if  (!( empty($_POST['nom']) || empty($_POST['check_list']) || empty($_POST['mail']) || empty($_POST['pass']))) {
        
        $nom = $_POST['nom'];
        $web = $_POST['web'];
        $idiomes = "";
        $formacio = $_POST['formacio'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];

        foreach($_POST['check_list'] as $selected){
            $idiomes.=$selected.",";
        }

        if (!(preg_match ("/^[a-zA-Z-' ]*$/",$nom))) {
            $error = "Nom Incorrecte";
            $_SESSION['name'] = "Nom Incorrecte";  
        }
        
        if (empty($_POST['web'])){
            $web = "";
        } else if (!(preg_match ("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web))){
            $error = "Web Incorrecte";
            $_SESSION['web'] = "Web Incorrecte";
        }
    
        if (!(filter_var($mail, FILTER_VALIDATE_EMAIL))){
            $error = "Mail Incorrecte";
            $_SESSION['mail'] = "Mail Incorrecte"; 
        }
        if (!(preg_match ("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8}$/", $pass))){
            $error = "Contrasenya Incorrecta";
            $_SESSION['password'] = "Contrasenya Incorrecta"; 
        }    
        
    
    } else {
        $error = 'falten_valors';
        $_SESSION['faltenV'] = "Falten Valors!";
    }

    if ($error!= "ok") {
        header("Location:index.php?error=$error");

    }
        


?>



<!DOCTYPE html>



<html lang="ca" >
    <head>
        <meta charset="utf-8" />
        <title>Formularis 21 </title>
    </head>

    <body>
        <h2> Dades del Formulari: </h2>
        <p> <b>Nom:</b> <?= $nom ?> </p>
        <p> <b>Formacio:</b>  <?= $formacio ?> </p>
        <p> <b>Idiomes:</b>  <?= $idiomes ?> </p>
        <p> <b>email:</b>  <?= $mail ?> </p>
        <p> <b>Lloc Web:</b>  <?= $web ?> </p>
        

    </body>
</html>

