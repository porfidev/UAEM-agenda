<?php
session_start();

$_SESSION['a'];
$conexion=mysql_connect("localhost","root","")
  or die("Problemas en la conexion");
mysql_select_db("agenda",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("insert into  conyuge(id_conyuge,nombre,apellido_p,apellido_m,telefono)values('$_SESSION[a]','$_REQUEST[conyuge]','$_REQUEST[a_p]','$_REQUEST[a_m]','$_REQUEST[tel]')",$conexion)
  or die("Problemas en el select".mysql_error());
mysql_close($conexion);
?>
<script>
cerrar();
function cerrar(){
	window.close();
}
</script>