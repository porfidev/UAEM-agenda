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
if(preguntar.nombre.value.length==0)
  {
  alert("campo nombre vacio");
  preguntar.nombre.focus();
  return (false);
  }
  if(preguntar.a_p.value.length==0)
  {
  alert("campo apellido_p vacio");
  preguntar.a_p.focus();
  return (false);
  }
  if(preguntar.a_m.value.length==0)
  {
  alert("campo apellido_m vacio");
  preguntar.a_m.focus();
  return (false);
  }
if(confirm("¿desea guardar el registro?"))
	{
		alert("!registro guardado!");
	}
	else
	{
	return (false);
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
<p align="left" class="Estilo1">No. Contacto
<?php
$a=$_SESSION['a'];
echo "".$a."";
?>
</p>

<form  name="preguntar" method="post"  onsubmit="return validar(this)" action="guar_rep_par.php">
  <div align="center">
    <table width="200" border="1">
      <tr>
        <td class="Estilo1">Nombre</td>
        <td class="Estilo1"><input name="nombre" type="text" class="campologin" id="nombre" /></td>
      </tr>
      <tr>
        <td class="Estilo1">Apellido Paterno</td>
        <td class="Estilo1"><input name="a_p" type="text" class="campologin" id="textfield10" /></td>
      </tr>
      <tr>
        <td class="Estilo1">Apelllido Materno</td>
        <td class="Estilo1"><input name="a_m" type="text" class="campologin" id="textfield11" /></td>
      </tr>
    </table>
  </div>
    <label>
          <input name="button" type="submit" class="botonalpha" id="button" value="Guardar y agregar otro" />
          <input name="button3" type="button" class="botonalpha" value="Cerrar" onclick="cerrar();" />
    </label>
  <label></label>
</form>
</div>
</div>
</body>
</html>