<?php
require("datos_conexion.php");
$rutaimg=$_GET["rutaimg"];
$base->query("delete from mueble where rutaimg='$rutaimg'");
header("location:muebles.php");
?>