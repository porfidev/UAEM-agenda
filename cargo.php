<?php
session_start();
?>
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
if(preguntar.cargo.value.length==0)
  {
  alert("campo cargo vacio");
  preguntar.cargo.focus();
  return (false);
  }
 
if(confirm("¿desea guardar el registro?"))
	{
		alert("!registro guardado!");
	document.pregunta.submit;
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
<form action="gua_cargo.php" method="post"  name="preguntar" class="Estilo1" onSubmit="return validar(this)">
  <p>&nbsp;</p>
  <div align="center">
    <table width="200" border="1">
      <tr>
        <td><strong>NO. Contacto </strong></td>
        <td><div align="center"><strong>
          <?php
$a=$_SESSION['a'];
echo "".$a."";
?>
        </strong></div></td>
      </tr>
      <tr>
        <td><strong>cargo</strong></td>
        <td><div align="center">
          <input name="cargo" type="text" class="campologin" id="cargo" />
        </div></td>
      </tr>
      <tr>
        <td><strong>domicilio</strong></td>
        <td><div align="center">
          <input name="trabaja2" type="button" class="botonalpha" id="trabaja2" onclick="MM_openBrWindow('domicilio_off.php','','width=600','height=300')" value="ingresar domicilio" />
        </div></td>
      </tr>
    </table>
  </div>
  <div align="center"></div>
  <p>
   <p align="center">
      <input name="button" type="submit" class="botonalpha" id="button" value="Registrar y Agregar otro" />
      <input name="button3" type="button" class="botonalpha" value="Cerrar" onclick="cerrar();" />
  </p>
</form>
</div>
</div>

</body>
</html>