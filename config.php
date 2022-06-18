<?
$servidor = "localhost";
$usuario_BD = "root";
$pass_BD = "";
$BaseDatos = "agenda";

$acceso=mysql_connect("$servidor","$usuario_BD","$pass_BD");

if(!$acceso)
	echo mysql_error();

$seleccion=mysql_select_db("$BaseDatos",$acceso);

if(!$seleccion)
	echo mysql_error();
?>