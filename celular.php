<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script type="text/javascript">
function validar(preguntar)

{
if(preguntar.cel.value.length==0)
  {
  alert("campo celular vacio");
  preguntar.cel.focus();
  return (false);
  }
  if(preguntar.compa.value.length==0)
  {
  alert("campo compañia vacio");
  preguntar.compa.focus();
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
	  <form  name="preguntar" method="post"  onsubmit="return validar(this)" action="guar_celular.php">
	    <div align="center">
    <table width="200" border="1">
      <tr>
        <td>No. Contacto</td>
        <td><div align="center">
          <?php
$a=$_SESSION['a'];
echo "".$a."";
?>
          </div></td>
        </tr>
      <tr>
        <td>Número</td>
        <td>
          <div align="center">
            <input type="text" name="cel" id="cel" />
            </div></td>
        </tr>
      <tr>
        <td>Compañia</td>
        <td><div align="center">
          <select name="compa" id="compa">
            <option>Telcel</option>
            <option>Movistar</option>
            <option>Iusacell</option>
            <option>Unefon</option>
            <option>Nextel</option>
            </select>
          </div></td>
        </tr>
      </table>
        </div>
	    <p align="center">
	      <input name="button" type="submit" class="botonalpha" id="button" value="Registrar y Agregar otro" />
	      <input name="button3" type="button" class="botonalpha" value="Cerrar" onclick="cerrar();" />
        </p>
</form>
</div>
</div>
<div align="left">
</div>
</body>
</html>