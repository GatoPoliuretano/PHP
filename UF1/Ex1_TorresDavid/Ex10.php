<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex10</title>
</head>
<body>
    <h1>Ex10</h1>
    <?php
        $num1 = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = test_input($_POST["num1"]);
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
    NUMERO: <input type="text" name="num1">
    <br><br>
    <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
    echo "<h2> RESULTAT </h2>";

    if(primo($num1)){
            echo "Es un nombre primer";
        } else{
            echo "No es un nombre primer";
        }
    

        function primo($num){
            for($i=2;$i<=$num;$i++){
                if($num%$i==0){
                    if(++$cont>1){
                        return false;
                    }
                }
            }
            return true;
        }
    ?>

</body>
</html>