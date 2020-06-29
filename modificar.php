<?php
return;
function buscar_nombre(){
  if ($conexion = mysqli_connect ("127.0.0.1", "root", "")) {
    mysqli_select_db ($conexion, 'tienda');

    $nombre = $_POST ['nombre'];

    if ($q= "SELECT*FROM tblproductos WHERE nombre= '$nombre'") {
      $reg= mysqli_query($conexion, $q);
      $nombre_reg= mysqli_fetch_array ($reg);
      if ($nombre_reg ['nombre'] == $nombre) {
        return $nombre_reg;
      }
    } else {
      echo "<p> MySQL no conoce el producto</p>";
    }
  } else {
    echo "ERROR!";
  }
}
function guardar_cambios(){
  if ($conexion= mysqli_connect ("127.0.0.1", "root", "")) {
    mysqli_select_db($conexion, "tienda");

    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $imagen=$_POST['imagen'];

     $consulta= "UPDATE tblproductos SET nombre='$nombre', precio='$precio', descripcion='$descripcion', imagen= '$imagen' WHERE nombre='$nombre' ";

     mysqli_query($conexion, $consulta);
     header('location: buscar_nombre.html');
     return;
} else {
    echo "ERROR!";
}
}
?>
