<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start ();
    if (empty ($_SESSION["usuario"])) {
      header("location: formualt.php");
      exit();
    }
    echo "bienvenido seccion Admin";
     ?>
     <br><br>
     <a href="logout.php">cerrar sesion</a>
  </body>
</html>
