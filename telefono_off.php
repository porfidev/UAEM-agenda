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
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p><strong>No. Contacto</strong>
<?php
$a=$_SESSION['a'];
echo "".$a."";
?>
</p>
<div id="contenedor">
	<div id="contenido">
   <form  name="alta" method="post" onSubmit="return validar(this)" action="guar_tele_par_off.php">
    <div align="center" class="Estilo1">
      <div align="center">
        <table width="200" border="1">
          <tr>
            <td><strong>Número</strong></td>
            <td><input name="numero" type="text" class="campologin" id="numero" /></td>
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