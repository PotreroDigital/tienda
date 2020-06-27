<?php
if ($conexion = mysqli_connect ("127.0.0.1", "root")) {
  echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>";

$nombre = $_POST ['nombre'];
$precio = $_POST['precio'];
$descripcion = $_POST ['descripcion'];
$imagen = $_POST ['imagen'];

$consulta = "INSERT INTO tblproductos (id, nombre, precio, descripcion, imagen) VALUES ('', '$nombre', '$precio', '$descripcion', '$imagen')";

mysqli_select_db($conexion, "tienda");
if (mysqli_query ($conexion, $consulta)) {
  echo "<p> Registro agregado. </p>";
} else {
  echo "<p>No se agrego.</p>";
}
}  else {
  echo "<p> MySQL no lo reconoce.</p>";
}
 ?>
