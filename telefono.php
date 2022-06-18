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
if(preguntar.numero.value.length==0)
  {
  alert("campo numero vacio");
  preguntar.numero.focus();
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
<p>No. Contacto
  <?php
$a=$_SESSION['a'];
echo "".$a."";
?>
</p>
 <form  name="preguntar" method="post"  onsubmit="return validar(this)" action="guar_tele_par.php">
    <div align="center">
      <table width="200" border="1">
        <tr>
          <td>Numero</td>
          <td><input name="numero" type="text" class="campologin" id="numero" /></td>
        </tr>
      </table>
    </div>
        <input name="button" type="submit" class="botonalpha" id="button" value="Guardar y Agregar otro" />
        <input name="button3" type="button" class="botonalpha" value="Cerrar" onclick="cerrar();" />
</form>
</div>
</div>
</body>
</html>