<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
</head>
<body>
    <h1>Ex3 - David Torres</h1>

    <?php
        $x = 0;
        $y = 2;

        $x2 = 0;
        $y2 = 2;

        echo "<h2> FOR </h2>";
        for ($x = 0; $x <= 20; $x++){
            $z = $x ** $y;
            echo "$x - $z <br>";
        }
        
        echo "<br>";

        echo "<h2> WHILE </h2>";
        while ($x2 <= 19){
            $x2++;
            $z2 = $x2 ** $y2;
            echo "$x2 - $z2 <br>";
        }
        
    ?>
    
</body>
</html>