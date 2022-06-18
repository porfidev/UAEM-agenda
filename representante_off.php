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
		document.preguntar.reset("representante_off.php")
	}
	
}
function cerrar(){
	window.close();
}
</script>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<body>
<p><strong>No. Contacto
<?php
$a=$_SESSION['a'];
echo "".$a."";
?>
</strong></p>
<div id="contenedor">
	<div id="contenido">
<form  name="alta" method="post" onSubmit="return validar(this)" action="guar_rep_par_off.php">

  <div align="center" class="Estilo1">
    <div align="center">
      <table width="200" border="1">
        <tr>
          <td><strong>Nombre</strong></td>
          <td><input name="nombre" type="text" class="campologin" id="nombre" /></td>
        </tr>
        <tr>
          <td><strong>Apellido Paterno</strong></td>
          <td><input name="a_p" type="text" class="campologin" id="textfield10" /></td>
        </tr>
        <tr>
          <td><strong>Apelllido Materno</strong></td>
          <td><div align="center">
            <input name="a_m" type="text" class="campologin" id="textfield11" />
          </div></td>
        </tr>
      </table>
  </div>
    </label>
    <div align="center">
      <input name="button" type="submit" class="botonalpha" id="button" value="Guardar y Agregar otro" />
      <input name="button3" type="button" class="botonalpha" value="Cerrar" onclick="cerrar();" />
    </div>
</form></div></div>
</body>
</html>