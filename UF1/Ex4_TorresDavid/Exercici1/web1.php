<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> WEB 1 </title>
</head>
<body>
    <h1> WEBOS 1</h1>

    <?php
        /* Fes un programa per fer una calculadora amb botons */
        $text = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") { // En cas que el request method sigui "GET", cridarà la funció test_input per cada variable
            $text = test_input($_POST["text"]);
            }

            function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    Text: <input type="text" name="text">
    <input type="submit" name="resultat" value="suma">

    <?php
        session_start();
        $_SESSION["text"] = $text;
        
        for ($i = 0; $i < strlen($text); $i++){
            if ($text[$i] == strtoupper($text[$i])){
                echo "Perfecte";
                break;
            } else {
                echo $_SESSION["error"];
                break;
            }
        }
    
    ?>

</body>
</html>