<?php
include 'modificar.php';
$reg= buscar_nombre();
$nombre= $reg['nombre'];
$precio= $reg['precio'];
$descripcion= $reg['descripcion'];
$imagen= $reg['imagen'];
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h2>Modificar productos</h2>
     <p>ingrese los nuevos datos del producto</p>
     <form class=""  method="post">
       <input type="text" name="nombre" placeholder="Nombre" value="<?php echo "$nombre"; ?>">
       <input type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">
       <input type="text" name="descripcion" placeholder="Descripcion"value="<?php echo "$descripcion"; ?>">
       <input type="text" name="imagen" placeholder="Imagen" value="<?php echo "$imagen"; ?>">
       <input type="submit" name="guardar" value="guardar_cambios">
       <button type="submit" name="cancelar" formaction="formualt.php">cancelar</button>
     </form>
       <?php
       if (array_key_exists ('guardar', $_POST)) {
         guardar_cambios();
       }
       ?>
    </body>
  </html>
