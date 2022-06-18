<?php
session_start();

$_SESSION['a'];
$conexion=mysql_connect("localhost","root","")
  or die("Problemas en la conexion");
mysql_select_db("agenda",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("insert into  domicilio_par(cod_part,calle,	numero,colonia,municipio,estado,pais)values('$_SESSION[a]','$_REQUEST[calle]','$_REQUEST[numero]','$_REQUEST[colonia]','$_REQUEST[municipio]','$_REQUEST[estado]','$_REQUEST[pais]')",$conexion)
  or die("Problemas en el select".mysql_error());
mysql_close($conexion);

Header("location: domicilio.php");
?>