<?php
$conexion=mysql_connect("localhost","root","")
  or die("Problemas en la conexion");
mysql_select_db("agenda",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("insert into usuarios_bd(nombre,pass,tipo)values('$_REQUEST[usuario]','$_REQUEST[contra]','$_REQUEST[tipo]')",$conexion)
  or die("Problemas en el select".mysql_error());
mysql_close($conexion);
?>
<script>
cerrar();
function cerrar(){
	window.close();
}
</script>