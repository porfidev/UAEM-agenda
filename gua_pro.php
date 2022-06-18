<?php
session_start();
$_SESSION['a'];
$conexion=mysql_connect("localhost","root","")
  or die("Problemas en la conexion");
mysql_select_db("agenda",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("insert into  profecion(cod_pro,profecion)values('$_SESSION[a]','$_REQUEST[profesion]')",$conexion)
  or die("Problemas en el select".mysql_error());
mysql_close($conexion);
Header("Location: 2pro.php");
?>