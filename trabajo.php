<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

function validar(preguntar)

{
if(preguntar.nombre.value.length==0)
  {
  alert("campo nombre vacio");
  preguntar.nombre.focus();
  return (false);
  }
  if(preguntar.giro.value.length==0)
  {
  alert("campo giro paterno vacio");
  preguntar.giro.focus();
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
<form  name="alta" method="post" onSubmit="return validar(this)" action="gua_trabajo.php">
  <p>&nbsp;</p>
  <p><span class="Estilo1">No. Contacto</span>
    <?php
$a=$_SESSION['a'];
echo "".$a."";
?>
  </p>
  <div align="center">
    <table width="200" border="1">
      <tr>
        <td class="Estilo1">Nombre de Empresa</td>
        <td class="Estilo1"><input name="nombre" type="text" class="campologin" id="nombre" /></td>
      </tr>
      <tr>
        <td class="Estilo1">Giro Empresa</td>
        <td class="Estilo1"><input name="giro" type="text" class="campologin" id="giro" /></td>
      </tr>
      <tr>
        <td class="Estilo1">Cargo</td>
        <td class="Estilo1"><div align="center">
          <input name="trabaja2" type="button" class="botonalpha" id="trabaja2" Value="Incorporar Cargo" onclick="MM_openBrWindow('cargo.php','','width=600','height=300')" />
        </div></td>
      </tr>
    </table>
    
  </div>
    </label>
  <div align="left"></div>
  <p align="left">&nbsp;</p>
        <input name="button" type="submit" class="botonalpha" id="button" value="Guardar y Agregar otro" />
         <input name="button3" type="button" class="botonalpha" value="Cerrar" onclick="cerrar();" />
</form>
</div>
</div>
</body>
</html>