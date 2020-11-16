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
    Ventas
</a>
  <nav>
    <A href=eliminar.html class="nav">Eliminar</a>
      /
      <A href=addmueb.html class="nav">Agregar</a>
      /
      <A href=ventas.html class="nav">Visualizar ventas</a>
      /
      <a href="CARPINTERIA.html" class="nav">Visualizar como cliente</a>
  </nav> 
  

<body>
  <?php
$num=$_GET["idname"];


require("datos_conexion.php");
require("busqueda.php");



   $conexion=mysqli_connect($db_host,$db_usuario,$db_contra, $db_nombre);
   if (mysqli_connect_errno()){echo "Fallo al conectar uwu";
exit();}
mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la DB");
   $consulta="delete from name where idname =$num";
   $resultado=mysqli_query($conexion,$consulta);
   
   if($resultado==false){
       echo "error en consulta";
   }else{
       if (mysqli_affected_rows($conexion)==0){
           echo "No existe ese registro así que no se puede eliminar";
       }else{echo "Borrado uwu";}
    }
   mysqli_close($conexion);
   ?>
</body>
</html>