<?
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
<!--
body {
	background-image: url(file:///C|/Users/Alejandra/Desktop/proyecto/fondo_agenda.png);
}
.Estilo1 {color: #993300}
-->
</style>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>
<div id="contenedor">
	<div id="contenido">
<body>
<form id="form1" name="form1" method="post" action="consulta_general.php">
    <div align="center">
      <table width="200" border="1">
        <tr>
          <td><div align="center">Seleccione Número de Contacto</div></td>
          <td><select name="contacto" class="campologin" id="contacto">
            <?php
$conexion=mysql_connect("localhost","root","")
or die("Problemas en la conexion"); mysql_select_db("agenda",$conexion) or
die("Problemas en la seleccion de la base de datos");
$registros= mysql_query("select * from persona",$conexion);

while ($reg=mysql_fetch_array($registros))
{
	echo ("<option value=\"".$reg['cod_contacto']."\">".$reg['cod_contacto']."</option>");
	
}


?>
          </select></td>
          </tr>
        </table>
      
    </div>
  <p align="center" class="Estilo1">
          <input name="button" type="submit" class="botonalpha" id="button" value="consultar" />
</p></form>
</div>
</div>
</body>
</html>