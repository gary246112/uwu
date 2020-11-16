<?php
require("datos_conexion.php");
$idventa=$_GET["idventa"];
$base->query("delete from ventas where idventa='$idventa'");
header("location:ventas.php");
?>