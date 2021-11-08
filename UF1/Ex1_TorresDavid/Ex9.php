<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex9</title>
</head>
<body>
    <?php
    $edat = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edat = test_input($_POST["edat"]);
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    ?>

    <h2> FORMULARI </h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    NOM: <input type="text">
    <br><br>
    EDAT: <input type="text" name="edat">
    <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
    echo "<h2> RESULTAT </h2>";

    if ($edat >= 18){
        echo "$edat anys - Ets major d'edat";
    } else{
        echo "$edat anys - Ets menor d'edat";
    }
    ?>
</body>
</html>