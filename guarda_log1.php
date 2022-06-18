<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script>
function validar(preguntar)

{
if(preguntar.usuario.value.length==0)
  {
  alert("campo usuario vacio");
  preguntar.usuario.focus();
  return (false);
  }
  if(preguntar.contra.value.length==0)
  {
  alert("campo contraseña paterno vacio");
  preguntar.contra.focus();
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
<form  name="alta" method="post" onSubmit="return validar(this)" action="guar_pass.php">
  <p align="center"><strong>Porfavor introdusca los siguientes campos para poder registrarse</strong></p>
  <div align="center">
    <table width="200" border="1">
      <tr>
        <td>Usuario</td>
        <td><label>
          <input name="usuario" type="text" class="campologin" id="usuario" />
        </label></td>
      </tr>
      <tr>
        <td><strong>Contraseña</strong></td>
        <td><label>
          <input name="contra" type="text" class="campologin" id="contra" />
        </label></td>
      </tr>
       <tr>
        <td><strong>tipo</strong></td>
        <td><label>
          
            
              <select name="tipo" class="campologin" id="tipo">
                <option selected="selected">usuario</option>
                <option>admin</option>
              </select>
            
          </label></td>
      </tr>
    </table>
  </div>
  <p align="center" class="Estilo1">
         <input name="button" type="submit" class="botonalpha" id="button" value="Guardar" />
          <input name="button3" type="button" class="botonalpha" value="Cerrar" onclick="cerrar();" /></p>
</form>
</div>
</div>
</body>
</html>