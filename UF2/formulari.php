<?php
 session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FORMULARI PHP - 06</title>
</head>
<body>
    <h2> FORMULARI </h2>
    <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        Nom: <input type="text" name="nom">
        <?php if (!empty( $_SESSION['ERROR'])) {  echo $_SESSION['ERROR'];  }  ?>

        <br><br>
        Password: <input type="text" name="pass">
        <br><br>
        Formacio:
        <br>
        <select name="formacio">
            <option value="ESO"> Educació Obligatoria </option>
            <option value="FP"> Formació Professional </option>
            <option value="BAT"> Baxillerat </option>
        </select>
        <br><br>
        Idiomes:
        <input type="checkbox" name="idiomes"> Català 
        <input type="checkbox" name="idiomes"> Español 
        <input type="checkbox" name="idiomes"> Anglès 
        <input type="checkbox" name="idiomes"> Francés 
        <input type="checkbox" name="idiomes"> Aleman
        <br><br>
        Email: <input type="text" name="mail">
        <br><br>
        Lloc Web: <input type="text" name="domini">
        <br><br>
        <input type="submit" value="enviar" name="submit">
    </form>


    <?php
        echo $_SESSION['name'];

    ?>
</body>
</html>