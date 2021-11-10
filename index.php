<!DOCTYPE html>
<html lang="ca" >
    <head>
        <meta charset="utf-8" />
        <title>Formularis 21 </title>
    </head>
    <body>
        <h1>Formulari</h1>
        
        <?php 

            if (isset($_GET['error'])) {
            $error = $_GET['error'];
            
            if ($error == 'nom') {
                echo '<strong style="color:red">Nom incorrecte  </strong>';
            }
            if ($error == 'cognom') {
                echo '<strong style="color:red">Cognom incorrecte  </strong>';
            }
            if ($error == 'edat') {
                echo '<strong style="color:red">Edat incorrectea  </strong>';
            }
            if ($error == 'mail') {
                echo '<strong style="color:red">Mail incorrecte  </strong>';
            }
            if ($error == 'pass') {
                echo '<strong style="color:red">Password incorrecte  </strong>';
            }
        

        }
        ?>
        <!-- 
            * action a la pàgina que anirà la informació del Formulari
            * method POST GET
            * filtrem de la banda del client, però també del servidor


        -->
        
            <form action="processar.php" method="POST">
                Nom:
                
                    <label for="nom"></label>
                    <input type="text" name="nom"  pattern="[A-Za-z]+"/>
                       
                <br><br>
                Cognom:
                
                    <label for="cognom" require="required" pattern="[A-Za-z]+"></label>
                    <input type="text" name="cognom"/>
                       
                <br><br>
                Formació:
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
                Email:
                
                    <label for="mail"></label>
                    <input type="email" name="mail" require="required"  />
                       
                <br><br>
                Password:
                
                    <label for="pass"></label>
                    <input type="password" name="pass" require="required"  />
                       
                <br><br>
                

                <input type="submit" value="enviar"/>
                

            </form>
        </p>
    </body>
</html>