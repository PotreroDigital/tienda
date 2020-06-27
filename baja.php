<?php
if ($conexion = mysqli_connect ("127.0.0.1", "root", "") ) {
  mysqli_select_db ($conexion, "tienda");

    $nombre=$_POST['nombre'];

    $consulta="DELETE FROM tblproductos WHERE nombre=$nombre";

    if (mysqli_query ($conexion, $consulta) ) {
      echo "<p>Registro eliminado.</p>";
    } else {
      echo "no encontrado";
    }
  } else {
      echo "<p>No existe producto con esa descripcion</p>";
    }
?>
