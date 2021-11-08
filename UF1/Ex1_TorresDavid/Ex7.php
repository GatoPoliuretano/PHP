<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex7</title>
</head>
<body>
    <h1>Ex7 - David Torres</h1>
    <?php
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2']; 

        if ($num1 < $num2){
            while($num1 < $num2){
                $num1++;
                if ($num1 % 2 !== 0){
                    echo "$num1 <br>";
                }
            }
    
        } else{
            while($num2 < $num1){
                $num2++;
                if ($num2 % 2 !== 0){
                    echo "$num2 <br>";
                }
            }
        }
        
    ?>
</body>
</html>