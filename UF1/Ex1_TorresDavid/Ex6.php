<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estils.css" type="text/css">
    <title>Ex6</title>
</head>
<body>
    <h1>Ex6 - David Torres</h1>
    <table class="Taula">
    <tr>
        <th>Taula 1</th>
        <?php
        $numM = 0;
        $num1 = 1;
        while($numM < 10){
            $numM++;
            $Total = $numM * $num1;
            echo "<tr> <td> $numM x $num1 = $Total </td> </tr>";
          }
        ?>
        <th >Taula 2</th>
        <?php 
            $numM2 = 0;
            $num2 = 2;
            while($numM2 < 10){
                $numM2++;
                $Total2 = $numM2 * $num2;
                echo "<tr> <td> $numM2 x $num2 = $Total2 </td> </tr>";
            }
      
        ?>
        <th>Taula 3</th>
        <?php 
            $numM3 = 0;
            $num3 = 3;
            while($numM3 < 10){
                $numM3++;
                $Total3 = $numM3 * $num3;
                echo "<tr> <td> $numM3 x $num3 = $Total3 </td> </tr>";
            }
      
        ?>
        <th>Taula 4</th>
        <?php 
            $numM4 = 0;
            $num4 = 4;
            while($numM4 < 10){
                $numM4++;
                $Total4 = $numM4 * $num4;
                echo "<tr> <td> $numM4 x $num4 = $Total4 </td> </tr>";
            }
      
        ?>
        <th>Taula 5</th>
        <?php 
            $numM5 = 0;
            $num5 = 5;
            while($numM5 < 10){
                $numM5++;
                $Total5 = $numM5 * $num5;
                echo "<tr> <td> $numM5 x $num5 = $Total5 </td> </tr>";
            }
      
        ?>
        <th>Taula 6</th>
        <?php 
            $numM6 = 0;
            $num6 = 6;
            while($numM6 < 10){
                $numM6++;
                $Total6 = $numM6 * $num6;
                echo "<tr> <td> $numM6 x $num6 = $Total6 </td> </tr>";
            }
      
        ?>
        <th>Taula 7</th>
        <?php 
            $numM7 = 0;
            $num7 = 7;
            while($numM7 < 10){
                $numM7++;
                $Total7 = $numM7 * $num7;
                echo "<tr> <td> $numM7 x $num7 = $Total7 </td> </tr>";
            }
      
        ?>
        <th>Taula 8</th>
        <?php 
            $numM8 = 0;
            $num8 = 8;
            while($numM8 < 10){
                $numM8++;
                $Total8 = $numM8 * $num8;
                echo "<tr> <td> $numM8 x $num8 = $Total8 </td> </tr>";
            }
      
        ?>
        <th>Taula 9</th>
        <?php 
            $numM3 = 0;
            $num9 = 9;
            while($numM9 < 10){
                $numM9++;
                $Total9 = $numM9 * $num9;
                echo "<tr> <td> $numM9 x $num9 = $Total9 </td> </tr>";
            }
      
        ?>
        <th>Taula 10</th>
        <?php 
            $numM10 = 0;
            $num10 = 10;
            while($numM10 < 10){
                $numM10++;
                $Total10 = $numM10 * $num10;
                echo "<tr> <td> $numM10 x $num10 = $Total10 </td> </tr>";
            }
      
        ?>

    </tr>
    </table>
</body>
</html>