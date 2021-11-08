<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
</head>
<body>
    <h1>ex2</h1>

    <?php

        if(isset($_COOKIE["temps"])){
            echo gmdate("H:i:s", time() - $_COOKIE["temps"]);
                
        } else {
            echo "Benvingut a la nostre pàgina";
            setcookie("temps",time(),time()+3600*24);   
        }
        

    ?>
</body>
</html>