<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EX4</title>
</head>
<body>
    <h1>Ex4 - David Torres</h1>

    <?php
      $num1 = $_GET['num1'];
      $num2 = $_GET['num2']; 
      $numM = 0;
      $numM2 = 0;

      echo "<h3> NOMBRE $num1 </h3>";
      
      while($numM < 10){
        $numM++;
        $Total = $numM * $num1;
        echo "$numM x $num1 = $Total <br>";
      }

      echo "<h3> NOMBRE $num2 </h3>";
      
      while($numM2 < 10){
        $numM2++;
        $Total2 = $numM2 * $num2;
        echo "$numM2 x $num2 = $Total2 <br>";
      }

      echo "<h3> SUMAR </h3>";
      $suma = $num1 + $num2;
      echo "$num1 + $num2 = $suma";

      echo "<h3> RESTAR </h3>";
      $restar = $num1 - $num2;
      echo "$num1 - $num2 = $restar";

      echo "<h3> DIVIDIR </h3>";
      $dividir = $num1 / $num2;
      echo "$num1 / $num2 = $dividir";

      echo "<h3> MÚLTIPLICAR </h3>";
      $multi = $num1 * $num2;
      echo "$num1 x $num2 = $multi";

      echo "<h3> DIVISIÓ SENCERA </h3>";
      $divSencera = intdiv($num1,$num2);
      echo "$num1 // $num2 = $divSencera";

      echo "<h3> RESIDU </h3>";
      $residu = $num1 % $num2;
      echo "$num1 % $num2 = $residu";

      echo "<h3> POTÈNCIA </h3>";
      $potencia = $num1 ** $num2;
      echo "$num1 ** $num2 = $potencia";


    ?>
</body>
</html>