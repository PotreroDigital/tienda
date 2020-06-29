<?php
  // 1) Conexion
  if ($conexion = mysqli_connect("127.0.0.1", "root", "")){
    mysqli_select_db($conexion, "tienda");

    // 2) Almacenamos los datos del envío POST
    $nombre = $_POST['nombre'];

    // 3) Preparar la orden SQL
    $consulta = "DELETE FROM tblproductos WHERE nombre='$nombre'";

    // 4) Ejecutar la orden y ingresamos datos
    if (mysqli_query($conexion, $consulta) ){
      echo "<p>Registro eliminado.</p>";
    }
  } else {
    echo "<p> MySQL no conoce ese usuario y password</p>";
  }
?>

<form class="" action="" method="post">
  <button type="submit" name="button" formaction="buscar_nombre.html">Volver</button>
</form>
