<?php
//conexion
if ($conexion = mysqli_connect ("127.0.0.1", "root")) {
  echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>";

  //preparar orden
  $consulta = "SELECT*FROM tblproductos";

  //ejecutar la orden y obtener datos
  mysqli_select_db($conexion, "tienda");
  $datos= mysqli_query ($conexion, $consulta);
