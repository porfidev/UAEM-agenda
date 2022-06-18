<?php
session_start();

$_SESSION['a'];
$conexion=mysql_connect("localhost","root","")
  or die("Problemas en la conexion");
mysql_select_db("agenda",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("insert into  representante(cod_per,nombre,apellido_p,apellido_m)values('$_SESSION[a]','$_REQUEST[nombre]','$_REQUEST[a_p]','$_REQUEST[a_m]')",$conexion)
  or die("Problemas en el select".mysql_error());
mysql_close($conexion);
Header("location: representante.php");
?>