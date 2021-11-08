<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> COOKIES </h1>
    <form method="post">
        <input type="submit" name="crearGaleta" value="Crear Galeta">
        <input type="submit" name="comprovarGaleta" value="Comprovar Galeta">
        <input type="submit" name="destruirGaleta" value="Destruir Galeta">
    </form>
    <?php


        $crearGaleta = $_POST['crearGaleta'];
        $comprovarGaleta = $_POST['comprovarGaleta'];
        $destruirGaleta = $_POST['destruirGaleta'];

        $nomCookie = "Cookie";
        $valueCookie = "Cookie Creada!";
        $expiracio = time() + 15;

        if ($crearGaleta){
            setcookie($nomCookie, $valueCookie, $expiracio);
        }

        if($comprovarGaleta){
            if(isset($_COOKIE[$nomCookie])){
                echo $_COOKIE[$nomCookie];
            } else {
                echo "ERROR";
            }

        }
        if ($destruirGaleta){
            unset($_COOKIE[$nomCookie]);
            setcookie($nomCookie, '', time()-15);
        }
        
        
        


    ?>
</body>
</html>