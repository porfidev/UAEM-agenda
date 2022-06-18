<?php
session_start();
//include("config.php");

$usuario = $_POST["usuario"];
$contrasena = $_POST["contra"];
$conexion=mysql_connect("localhost","root")or
 die("Problemas en la conexion");
mysql_select_db("agenda",$conexion) or
 die("Problemas en la seleccion de la base de datos");
$registros=mysql_query("SELECT * FROM usuarios_bd WHERE nombre = '$usuario' AND pass ='$contrasena'",
           $conexion)or die("Problemas en el select:".mysql_error());
if (mysql_num_rows($registros) == 0) {
   echo "El usuario y/o contraseña no existen, favor de registrarse";
    exit;
}
/*$consulta = "SELECT * FROM usuarios_bd WHERE nombre = '$usuario' AND pass ='$contrasena'";
$revision = mysql_query($consulta,$acceso);

if(!$revision)
	echo mysql_error();
	
if (mysql_num_rows($revision) == 0) {
    echo "El usuario y/o contraseña no existen, favor de registrarse";
    exit;
}*/

/*while ($fila = mysql_fetch_assoc($regitros)) 
{
	if ($fila["tipo"] == "admin")
	{
		$_SESSION['usuario_activo'] = $fila["nombre"];
		$_SESSION['autorizado'] = "si";
		$_SESSION['tipo_usuario'] = $fila["tipo"];
		Header("Location: administrador.php");
	}
	else
	{
		$_SESSION['usuario_activo'] = $fila["nombre"];
		$_SESSION['autorizado'] = "si";
		$_SESSION['tipo_usuario'] = $fila["tipo"];
		Header("Location: administrador.php");
	}
}*/
while ($reg=mysql_fetch_array($registros))
{
if ($reg["tipo"] == "admin")
	{
		$_SESSION['usuario_activo'] = $reg["nombre"];
		$_SESSION['autorizado'] = "si";
		$_SESSION['tipo_usuario'] = $reg["tipo"];
		Header("Location: administrador.php");
	}
	else
	{
		$_SESSION['usuario_activo'] = $reg["nombre"];
		$_SESSION['autorizado'] = "si";
		$_SESSION['tipo_usuario'] = $reg["tipo"];
		Header("Location: administrador.php");
	}
}
mysql_close($conexion);
?>