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
require("datos_conexion.php");
require("busqueda.php");

$id=$_GET["idmueb"];
$med=$_GET["medidas"];
$pre=$_GET["precio"];
$pic=$_GET["foto"];

  



   $conexion=mysqli_connect($db_host,$db_usuario,$db_contra, $db_nombre);
   if (mysqli_connect_errno()){echo "Fallo al conectar uwu";
exit();}
mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la DB");
   $consulta="select * from name";
   $resultado=mysqli_query($conexion,$consulta);
   
 
   while (($fila=mysqli_fetch_array($resultado, MYSQL_ASSOC))==true){
   
    //echo"<table><tr><td>";
   echo "<form action='accionactualizar.php' method ='GET'>";

   echo "<input type='text' name='idname' value='". 
   $fila ['idname']."'><br>";


   echo "<input type='text' name='nombre' value='". 
   $fila ['nombre']."'><br>";

   echo "<input type='text' name='appat' value='". 
   $fila ['appat']."'><br>";

   echo "<input type='text' name='apmat' value='". 
   $fila ['apmat']."'><br>";

echo  "<input type='submit' name='enviado' value='actualizar'>";
echo "</form>"; 
}
   
   ?>
</body>
</html>