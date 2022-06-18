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
  alert("campo cargo vacio");
  preguntar.nombre.focus();
  return (false);
  }
  if(preguntar.actividad.value.length==0)
  {
  alert("campo cargo vacio");
  preguntar.actividad.focus();
  return (false);
  }
 
if(confirm("¿desea guardar el registro?"))
	{
		alert("!registro guardado!");
	document.pregunta.submit;
	}
	else
	{
		document.pregunta.reset("club.php")
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
<form action="gua_club.php" method="post"  name="preguntar" class="Estilo1" onSubmit="return validar(this)">
  
  <p align="left">&nbsp;</p>
  <div align="center">
    <table width="200" border="1">
      <tr>
        <td class="Estilo1">No.Contacto</td>
        <td class="Estilo1"><div align="center">
          <?php
$a=$_SESSION['a'];
echo "".$a."";
?>
        </div></td>
      </tr>
      <tr>
        <td class="Estilo1">Nombre del club</td>
        <td class="Estilo1"><input type="text" name="nombre" id="nombre" /></td>
      </tr>
      <tr>
        <td class="Estilo1">Actividad</td>
        <td class="Estilo1"><div align="center">
          <select name="actividad" id="actividad">
            <option selected="selected">SELECCIONE</option>
            <option>NATACIÓN</option>
            <option>ESGRIMA</option>
            <option>BASQUETBOOL</option>
            <option>FUTBOOL</option>
            <option>VOLEIBOL</option>
            </select>
        </div></td>
      </tr>
    </table>
    </div>
    </label>
    <div align="center">
      <input name="button" type="submit" class="botonalpha" id="button" value="Guardar y Agregar otro" />
      <input name="button3" type="button" class="botonalpha" value="Cerrar" onclick="cerrar();" />
    </div>
</form>
</div>
</div>
</body>
</html>