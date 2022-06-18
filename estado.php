<? 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script>
function validar(preguntar)

{
if(preguntar.conyuge.value.length==0)
  {
  alert("campo conyuge vacio");
  preguntar.conyuge.focus();
  return (false);
  }
  if(preguntar.a_p.value.length==0)
  {
  alert("campo apellido paterno vacio");
  preguntar.a_p.focus();
  return (false);
  }
  if(preguntar.a_m.value.length==0)
  {
  alert("campo apellido materno vacio");
  preguntar.a_p.focus();
  return (false);
  }
   if(preguntar.tel.value.length==0)
  {
  alert("campo telefono vacio");
  preguntar.tel.focus();
  return (false);
  }
  if(preguntar.conyuge.value.length==0)
  {
  alert("campo conyuge vacio");
  preguntar.conyuge.focus();
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

</head>

<body>
<div id="contenedor">
	<div id="contenido">
<p>No de contacto es:
  <?php
$a=$_SESSION['a'];
echo "".$a."";
?>
</p>
<form  name="alta" method="post" onSubmit="return validar(this)" action="gua_conyuge.php">
  <div align="center">
    <table width="200" border="1">
      <tr>
        <td class="Estilo1">Nombre de conyuge</td>
        <td class="Estilo1"><input name="conyuge" type="text" class="campologin" id="conyuge" /></td>
        <td class="Estilo1">Apellido Paterno</td>
        <td class="Estilo1"><input name="a_p" type="text" class="campologin" id="a_p" /></td>
      </tr>
      <tr>
        <td class="Estilo1">Apellido Materno</td>
        <td class="Estilo1"><input name="a_m" type="text" class="campologin" id="a_m" /></td>
        <td class="Estilo1">Telefono</td>
        <td class="Estilo1"><input name="tel" type="text" class="campologin" id="tel" /></td>
      </tr>
    </table>
  </div>
  <p align="center" class="Estilo1">
          <input name="button" type="submit" class="botonalpha" id="button" value="Guardar" />
          <input name="button3" type="button" class="botonalpha" value="Cerrar" onclick="cerrar();" />
  </p>
</form>
</div>
</div>
</body>
</html>