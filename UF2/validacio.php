<?php
session_start();

$nom = "";
if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST"){
    $nom = dataFrom($_POST['nom']);
}

function dataForm($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (empty($_POST['nom'])){
    $_SESSION['ERROR'] = "Et falta posar el nom!";
}

?>
