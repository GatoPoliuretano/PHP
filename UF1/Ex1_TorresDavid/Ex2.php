<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <h1>Ex2 - David Torres</h1>

    <table class="Taula">
    <tr>
        <th> WHILE </th>
        <?php
            $x = 0;
            while ($x <= 100){
                $x++;
                if ($x % 2 == 0){
                    echo "<tr> <td> $x </td> </tr>";    
                }
            }
        ?>
        <th> DO AND WHILE </th>
        <?php
            $x2 = 0;
            do {
                $x2++;
                if ($x2 % 2 == 0){
                    echo "<tr> <td> $x2 </td> </tr>";
                } 
            } while ($x2 <= 100);
        ?>
        <th> FOR </th>
        <?php
            $x3 = 0;
            for ($x3 = 0; $x3 <= 100; $x3++){
                if ($x3 % 2 == 0){
                    echo "<tr> <td> $x3 </td> </tr>";
                }
            }
        ?>
    </tr>
    </table>
</body>
</html>