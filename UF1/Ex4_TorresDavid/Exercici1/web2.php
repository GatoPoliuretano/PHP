<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> WEB 2 </title>
</head>
<body>
    <h1> WEBOS 2 </h1>

    <h3> RESULTAT </h3>
    <?php
        session_start();
        $text = $_SESSION["text"];
        for ($i = 0; $i < strlen($text); $i++){
            $be = rtrim($text[$i], ".,!$%&/()=?¿*]{}-_.,:;");
            if ($text[$i] == strtoupper($text[$i])){
                echo $text;
            } else {
                session_destroy();
                session_start();
                $_SESSION["error"] = "no tenen majusucles";
            }
        }
    ?>
</body>
</html>