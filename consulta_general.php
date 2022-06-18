<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="contenedor">
	<div id="contenido">
<blockquote>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <?php
	
$a=$_REQUEST['contacto'];
$conexion=mysql_connect("localhost","root")or
 die("Problemas en la conexion");
mysql_select_db("agenda",$conexion) or
 die("Problemas en la seleccion de la base de datos");
$consulta= "SELECT * FROM `persona` where cod_contacto='$a'";
$consulta2= "SELECT * FROM `cargo` where id_cargo='$a'";
$con3="SELECT * FROM domicilio_par where cod_part='$a'";
$con4="SELECT * FROM telefono WHERE cod_telefono='$a'";
$con5="SELECT * FROM representante where cod_per='$a'";
$con6="SELECT * FROM profecion where cod_pro='$a'";
$con7="SELECT * FROM club where cod_club='$a'";
$con8="SELECT * FROM depedencia where cod_depencia='$a'";
$con13="SELECT * FROM cargo where id_cargo='$a'";
$con9="SELECT * FROM domicilio_off where cod_dom='$a'";
$con10="SELECT * FROM telefono_off where cod_tel='$a'";
$con11="SELECT * FROM representante_off where id_representante='$a'";
$con112="SELECT * FROM celular where cod_celular='$a'";

$sql = mysql_query($consulta, $conexion);
$sql2 = mysql_query($consulta2, $conexion);
$sql3 = mysql_query($con3, $conexion);
$sql4 = mysql_query($con4, $conexion);
$sql5 = mysql_query($con5, $conexion);
$sql6 = mysql_query($con6, $conexion);
$sql7 = mysql_query($con7, $conexion);
$sql8 = mysql_query($con8, $conexion);
$sql9 = mysql_query($con9, $conexion);
$sql10 = mysql_query($con10, $conexion);
$sql11 = mysql_query($con11, $conexion);
$sql12 = mysql_query($con112, $conexion);
$sql13 = mysql_query($con13, $conexion);
while ($reg=mysql_fetch_array($sql))
{
echo"No CONTACTO:".$reg['cod_contacto']."<br>";
echo"Nombre:".$reg['nombre']."<br>";
echo"APELLIDO_P:".$reg['apellido_p']."<br>";
echo"APELLIDO_M:".$reg['apellido_m']."<br>";
echo"TIPO DE TRATO:".$reg['trato']."<br>";
echo"ESTADO CIVIL:".$reg['estado_civil']."<br>";
echo"TRABAJA:".$reg['trabaja']."<br>";
echo"MES DE CUMPLEAÑOS:".$reg['mes']."<br>";
echo"DIA DE CUMPLEAÑOS:".$reg['dia']."<br>";
echo"SEXO:".$reg['sexo']."<br>";
echo"MAIL:".$reg['mail']."<br>";
echo"SKITEL:".$reg['numero']."<br>";
echo"FECHA DE REGUISTRO:".$reg['fecha']."<br>";
}
echo"CELULAR"."<br>";
while ($reg=mysql_fetch_array($sql12))
{
echo"NUMERO:".$reg['numero']."<br>";
echo"COMPAÑIA:".$reg['compa']."<br>";
}
while ($reg=mysql_fetch_array($sql6))
{
echo"PROFESION:".$reg['profecion']."<br>";
}
echo "<hr>";
echo "DOMICILIO(S) PARTCULAR:"."<br>";
while ($reg=mysql_fetch_array($sql3))
{
echo"CALLE:".$reg['calle']."<br>";
echo"NUMERO".$reg['numero']."<br>";
echo"NUMERO".$reg['colonia']."<br>";
echo"MUNICIPIO:".$reg['municipio']."<br>";
echo"ESTADO:".$reg['estado']."<br>";
echo"PAIS:".$reg['pais']."<br>";
}
echo""."<br>";
echo"TELEFONO(S) PARTICULAR"."<br>";
while ($reg=mysql_fetch_array($sql4))
{
echo"NUMERO:".$reg['numero']."<br>";
}
echo""."<br>";
echo"REPRESENTANTE PARTICULAR"."<br>";
while ($reg=mysql_fetch_array($sql5))
{
echo"NOMBRE:".$reg['nombre']."<br>";
echo"APELLIDO_P:".$reg['apellido_p']."<br>";
echo"APELLIDO_M:".$reg['apellido_m']."<br>";
}
echo "<hr>";
echo"Grupo SOCIAL"."<br>";
while ($reg=mysql_fetch_array($sql7))
{
echo"NOMBRE DEL CLUB:".$reg['nombre']."<br>";
echo"ACTIVIDAD:".$reg['actividad']."<br>";
}
echo "<hr>";
echo"DEPENDECIA"."<br>";
while ($reg=mysql_fetch_array($sql8))
{
echo"NOMBRE EMPRESA:".$reg['nombre']."<br>";
echo"COMPAÑIA".$reg['giro_social']."<br>";
}
while ($reg=mysql_fetch_array($sql13))
{
echo"Cargo: ".$reg['nombre']."<br>";

}
echo "<hr>";
echo "DOMICILIO(S) OFFICIALES:"."<br>";
while ($reg=mysql_fetch_array($sql9))
{
echo"CALLE:".$reg['calle']."<br>";
echo"NUMERO".$reg['numero']."<br>";
echo"COLONIA".$reg['colonia']."<br>";
echo"MUNICIPIO:".$reg['municipio']."<br>";
echo"ESTADO:".$reg['estado']."<br>";
echo"PAIS:".$reg['pais']."<br>";
echo""."<br>";
}
echo"TELEFONO(S) OFFICILES"."<br>";
while ($reg=mysql_fetch_array($sql10))
{
echo"NUMERO:".$reg['numero']."<br>";
echo""."<br>";
}
echo "<hr>";
echo"REPRESENTANTE OFFICIALES"."<br>";
while ($reg=mysql_fetch_array($sql11))
{
echo"NOMBRE:".$reg['nombre']."<br>";
echo"APELLIDO_P".$reg['apellido_p']."<br>";
echo"APELLIDO_M:".$reg['apelido_m']."<br>";
echo""."<br>";
}
echo "<hr>";
/*while ($reg=mysql_fetch_array($sql2))
{
echo"CARGO:".$reg['nombre']."<br>";
echo "<hr>";
}*/


?>
</blockquote>
</div>
</div>
</body>
</html>