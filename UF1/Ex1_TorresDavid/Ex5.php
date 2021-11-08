<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex5</title>
</head>
<body>
    <h1>Ex5 - David Torres</h1>
    <?php
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2']; 

        if ($num1 == NULL || $num2 == NULL){
            echo "Té que tindre dos valors";
        } else {
            if (!ctype_digit($num1) || !ctype_digit($num2)){
                echo "Té que tindre numeros o té que ser numeros positius";
            } else {
                if ($num1 < $num2){
                    while($num1 < $num2){
                        $num1++;
                        echo "$num1 <br>";
                    }
            
                } else{
                    while($num2 < $num1){
                        $num2++;
                        echo "$num2 <br>";
                    }
                }
            }
        }
        
        
    ?>
    
</body>
</html>