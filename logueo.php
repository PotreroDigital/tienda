<?php
$usuario1_correcto= "admin";
$palabra1_secreta_correcta ="admini";


$usuario = $_POST["usuario"];
$contraseña = $_POST ["contraseña"];

if ($usuario === $usuario1_correcto && $contraseña=== $palabra1_secreta_correcta) {
  session_start ();
  $_SESSION ["usuario"] = $usuario;
  header ("location: formualt.php");
}
else {
  echo "el usuario o la contraseña es incorrecto";
}

?>
