<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Web1 - Ex2</title>
</head>
<body>
    <?php
        session_start();
        $timeout = 60;
        if (isset($_SESSION['timeout'])){
            $sessionTTL = time() - $_SESSION['timeout'];
            if ($sessionTTL > $timeout) {
                session_destroy();
                header("Location: header.php");
            };
        };

        if (empty($_SESSION['email']) and empty($_SESSION['password'])){
            $formulari = '<h1> FORMULARI </h1>'
            .'<form method="post" action="web1.php">'
            .'EMAIL: <input type="text" name="email">'
            .'PASSWORD: <input type="text" name="pass">'
            .'<input type="submit" name="login" value="LOGIN">';

            echo($formulari);

            if (isset($_SESSION['error'])){
                echo($_SESSION['error']);
            };

        } else {
            echo("Benvingut!");
            $formulari = '<form method="post" action="web1.php">'
            .'<input type="submit" name="logout" value="LOGOUT">';

            echo($formulari);
        };
    ?>
 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ex1</title>
    </head>
    <body>
        
    </body>
    </html>


</body>
</html>