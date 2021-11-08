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
      $email = $_POST['email'];
      $pass = $_POST['password'];
      if (strpos($email, '@')){
          $email1=explode("@", $email);
          var_dump($email1);
          if ($email1[1]=="lacetania.cat" && $pass=="1234") {
              $_SESSION['email'] = $email;
              $_SESSION['password'] = $pass;
          } else{
              $_SESSION['error']="Error d'inici de sessio, torna a intentar.";
  
          };
      } else{
          $_SESSION['error']="Error d'inici de sessio, torna a intentar.";
      };
      $_SESSION['timeout']=time();
      header("Location: header.php");
    ?>
    



</body>
</html>