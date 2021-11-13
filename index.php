<!DOCTYPE html>
<html lang="ca" >
    <head>
        <meta charset="utf-8" />
        <title>Formularis </title>
    </head>
    <body>
        <h1>Formulari</h1>
        
        <?php 
            session_start();
        ?>
        
            <form action="processar.php" method="POST">
                Nom:
                
                    <label for="nom"></label>
                    <input type="text" name="nom"/>
                    <strong style='color:red'> * </strong>
                    <?php if ($_SESSION['name']) {echo "<br><br><span style='color:red'> {$_SESSION['name']}  </span>";}?>
                       
                <br><br>
                Password:
                
                <label for="pass"></label>
                <input type="password" name="pass" require="required"/>
                <strong style='color:red'> * </strong>
                <?php if ($_SESSION['password']) {echo "<br><br><span style='color:red'> {$_SESSION['password']}  </span>";}?>

                   
                <br><br>
                Formació:
                  <select name="formacio">
                    <option value="ESO"> Educació Obligatoria </option>
                    <option value="FP"> Formació Professional </option>
                    <option value="BAT"> Baxillerat </option>
                    <option value=""> (Opcional) </option>
                 </select>
                 <br><br>
                    Idiomes:
                    <input type="checkbox" name="check_list[]" value="Català"> Català 
                    <input type="checkbox" name="check_list[]" value="Español"> Español 
                    <input type="checkbox" name="check_list[]" value="Anglès"> Anglès 
                    <input type="checkbox" name="check_list[]" value="Francés"> Francés 
                    <input type="checkbox" name="check_list[]" value="Alemà"> Alemà
                    <strong style='color:red'> * </strong>
                    <?php if ($_SESSION['idiomes']) {echo "<br><br><strong style='color:red'> {$_SESSION['idiomes']}  </strong>";}?>

                <br><br>
                Email:
                
                    <label for="mail"></label>
                    <input type="email" name="mail" require="required"/>
                    <strong style='color:red'> * </strong>
                    <?php if ($_SESSION['mail']) {echo "<br><br><span style='color:red'> {$_SESSION['mail']}  </span>";}?>

                       
                <br><br>

                Lloc Web:
                
                <label for="mail"></label>
                <input type="text" name="web"/>
                <?php if ($_SESSION['web']) {echo "<br><br><span style='color:red'> {$_SESSION['web']}  </span>";}?>

                   
            <br><br>
               
                

                <input type="submit" value="enviar"/>
                <?php if ($_SESSION['faltenV']) {echo "<br><br><span style='color:red'> {$_SESSION['faltenV']}  </span>";}?>

                

            </form>
        </p>
    </body>
</html>