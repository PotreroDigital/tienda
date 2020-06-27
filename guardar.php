<?php
$conexion= mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "tienda");

$nombre= $_POST['nombre'];
$precio= $_POST['precio'];
$descripcion=$_POST['descripcion'];
$imagen=$_POST['imagen'];

$consulta= "UPDATE tblproductos SET nombre= '$nombre', precio='$precio', descripcion='$descripcion', imagen='$imagen' WHERE nombre=$nombre";

mysqli_query($conexion, $consulta);
echo "OKA";
 ?>
