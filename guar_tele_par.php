<?php
session_start();

$_SESSION['a'];
$conexion=mysql_connect("localhost","root","")
  or die("Problemas en la conexion");
mysql_select_db("agenda",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("insert into telefono(cod_telefono,numero)values('$_SESSION[a]','$_REQUEST[numero]')",$conexion)
  or die("Problemas en el select".mysql_error());
mysql_close($conexion);

Header("location: telefono.php");
?>