<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ex4 - PHP </title>
</head>
<body>

    <p> EX4 </p>
    
    <form method="post">
        <select name="colorFons"> 
            <option value="white"> Blanc </option>
            <option value="blue"> Blau </option>
        </select>
        <select name="text">
            <option value="black"> Negre  </option>
            <option value="orange"> Taronja </option>
        </select>
        <input type="submit" value="canvi">
    </form>

    <?php

    $textColor = $_POST["text"];
    $fonsColor = $_POST["colorFons"];

    setcookie("cookieText",$textColor,time() + 3600 * 24);
    setcookie("cookieFons",$fonsColor,time() + 3600 * 24);
   
    $fons = ($_COOKIE["cookieFons"]);
    $text = ($_COOKIE["cookieText"]);

    

    echo"<style>";

        echo"p{";
            echo"color: $text;";
        echo"}";

        echo"body{";
            echo"background-color: $fons;";
        echo"}";

    echo"</style>";


    ?>

</body>
</html>