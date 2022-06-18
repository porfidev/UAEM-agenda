<?
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p align="center">&nbsp;</p>
<p align="center" class="Estilo1">&nbsp;</p>
<p align="center" class="Estilo1">
  <?php
  
  $fecha=$_REQUEST['fecha'];
  if( $_REQUEST["estado"]=="casado")
  {
	      $estado="casado";
          if( $_REQUEST["estado1"]=="viudo")
		  {
	         $estado="viudo";
		  
               if( $_REQUEST["estado2"]=="soltero")
			   {
	             $estado="soltero";
		  
                   if( $_REQUEST["estado3"]=="divorciado")
				   {
	                 $estado="divorciado";
                   }
		       }
		  }
  }
  
$_SESSION['a'];
$conexion=mysql_connect("localhost","root","")
  or die("Problemas en la conexion");
mysql_select_db("agenda",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("insert into persona(Cod_contacto,nombre,apellido_p,apellido_m,trato,estado_civil,trabaja,mes,dia,sexo,mail,fecha,SKI)values('$_SESSION[a]','$_REQUEST[nombre]','$_REQUEST[a_p]','$_REQUEST[a_m]','$_REQUEST[trato]','$estado','$_REQUEST[trabaja]','$_REQUEST[mes]','$_REQUEST[dia]','$_REQUEST[sexo]','$_REQUEST[mail]','$fecha','$_REQUEST[skitel]')",$conexion)
  or die("Problemas en el select".mysql_error());
mysql_close($conexion);
echo "guardado";

?>
</p>
<p align="center"><strong>El contacto a sido dado de alta</strong></p>
</body>
</html>