<?php
session_start();

if ($_POST['nom'] == "nom"){
    $_SESSION['nom'] = $_POST['nom'];
}

?>