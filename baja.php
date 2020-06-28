<?php
if ($conexion = mysqli_connect ("127.0.0.1", "root")) {
  echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>";

  $nombre = $_POST ['nombre'];


  $consulta= "DELETE * FROM tblproductos WHERE nombre=$nombre";

  mysqli_select_db($conexion, "tienda");
  if (mysqli_query ($conexion, $consulta)) {
    echo "<p> Registro eliminado. </p>";
  } else {
    echo "<p> MySQL no lo reconoce.</p>";
  }
}
 ?>
