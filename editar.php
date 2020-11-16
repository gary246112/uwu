<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El pajaro carpintero</title> 
    <link rel="icon" href="img/12.jpg" type="img/png" sizes="">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
 <body>
  <header>
    <img src="img/12.jpg" class="cpp"> 
    <h1>Carpintería "El pájaro carpintero"</h1>   
  
  </header>
  <a>
    Editar
</a>
  <nav>
      <A href=ventas.php class="nav">Consultar ventas</a>
      /
      <A href=muebles.php class="nav">Muebles</a>
/
      <A href=cierre.php class="nav">Cerrar sesión</a>

    </nav> 

<body>
  <?php
 include("datos_conexion.php");

 if(!isset($_POST["updt"])){
 $idmueb=$_GET["idmueb"];
 $idc=$_GET["idc"];
 $medidas=$_GET["medidas"];
 $precio=$_GET["precio"];
 $rutaimg=$_GET["rutaimg"];
 }
 else{
  $idmueb=$_POST["idmueb"];   
  $idc=$_POST["idc"];
     $medidas=$_POST["medidas"];
     $precio=$_POST["precio"];
     $rutaimg=$_POST["rutaimg"];
$sql="update mueble set idc=:miIdc,
 medidas=:miMedidas, precio=:miPrecio, rutaimg=:miRutaimg where
  idmueb=:miIdmueb";
$resultado=$base->prepare($sql);
$resultado->execute(array(":miIdmueb"=>$idmueb
,":miIdc"=>$idc,":miMedidas"=>$medidas, ":miPrecio"=>$precio,
":miRutaimg"=>$rutaimg));
header("location:muebles.php");  
}
 ?>

<form name="formup" method="POST" action="<?php 
echo $_SERVER['PHP_SELF']; ?>">

<table>
<tr>
<td>ID mueble</td>
<td><label for="idmueb"></label>
<a><?php echo $idmueb ?></a></td>
</tr>
<tr>
<td>Medidas</td>
<td><label for="medidas"></label>
<input type="text" name="medidas" id="medidas"
value="<?php echo $medidas ?>"></td>
</tr>
<tr>
<td>Precio</td>
<td><label for="precio"></label>
<input type="text" name="precio" id="precio"
value="<?php echo $precio ?>"></td>
</tr>
<tr>
<td>Imagen</td>
<td><label for="rutaimg"></label>
<input type="file" name="rutaimg" id="rutaimg"
value="<?php echo $rutaimg ?>"></td>
</tr>
<tr>
<td>Categoria</td>
<td><label for="idc"></label>
<input type="text" name="idc" id="idc"
value="<?php echo $idc ?>"></td>
</tr>
<tr>
<td><input type="submit" name="updt" id="updt" value="Actualizar" ></td>
</tr>
</table>
</form>

  </body>
  </html>