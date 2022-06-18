<?
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script>
function validar(preguntar)

{
if(preguntar.profesion.value.length==0)
  {
  alert("campo prefecion vacio");
  preguntar.profesion.focus();
  return (false);
  }
 
if(confirm("¿desea guardar el registro?"))
	{
		alert("!registro guardado!");
	}
	else
	{
		return (false);
		//document.preguntar.reset("2pro.php")
	}
	
}

function cerrar(){
	window.close();
}
</script>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="contenedor">
	<div id="contenido">
<p>&nbsp;</p>
<p class="m"><strong>NO. Contacto es
  <?php
$a=$_SESSION['a'];
echo "".$a."";
?>
</strong></p>
<form  name="preguntar" method="post"  onsubmit="return validar(this)" action="gua_pro.php">
  <p class="m">&nbsp;</p>
  <div align="center">
    <table width="200" border="0">
      <tr>
        <td align="right"><strong>Profesión</strong></td>
        <td align="left"><div align="center"><strong>
          <select name="profesion" class="botonalpha" id="profesion">
            
            <?php
	  
$conexion=mysql_connect("localhost","root","")
or die("Problemas en la conexion"); mysql_select_db("agenda",$conexion) or
die("Problemas en la seleccion de la base de datos");
$registros= mysql_query("select * from catalogo_profe",$conexion);

while ($reg=mysql_fetch_array($registros))
{
	echo ("<option value=\"".$reg['nombre']."\">".$reg['nombre']."</option>");
}
?>
            </select>
        </strong></div></td>
      </tr>
    </table>
  </div>
  <p align="center">
    <input name="button" type="submit" class="botonalpha" value="Guardar y Agregar otra" />
    <input name="button3" type="button" class="botonalpha" value="Cerrar" onclick="cerrar();" />
  </p>
  <p>&nbsp;</p>
</form>

</div>
</div>
</body>
</html>