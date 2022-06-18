<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agenta Electrónica</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.botoningresa {
	height: 30px;
	width: 150px;
	margin-top: 6px;
}
</style>
<script language="javascript">

function MM_openBrWindow(theURL,winName,features) { 
  window.open(theURL,winName,features);
}
function validar(login)
{
	if(login.usuario.value.length==0)
	{
		alert("Ingresa un usuario");
		this.usuario.focus();
		return (false);
		}
	if(login.contra.value.length==0)
	{
		alert("Ingresa una contraseña");
		this.contra.focus();
		return (false);
	}
}
</script>
</head>
<body>
<form name="login" method="post" action="acceso_usuarios.php" onsubmit="return validar(this)">
  <div id="contenedor">
    <p><img src="imagenes/titulo.jpg" width="408" height="176" /></p>
    <div id="login">
    <table width="361" border="0">
      <tr>
        <td width="355" height="52" align="right"><input name="usuario" type="text" class="campologin" id="textfield" /></td>
      </tr>
      <tr>
        <td height="38" align="right"><input name="contra" type="password" class="campologin" id="contra" /></td>
      </tr>
    </table>
    <span class="texto">¿No esta registrado?
    <label>
      <input type="checkbox" name="checkbox" id="checkbox" onclick="MM_openBrWindow('guarda_log1.php','','width=630','height=300')"/>
    </label>
    </span>
    <label><br />
<input name="ingresar" type="submit" class="botonalpha" value="Ingresar a la Agenda" />
      </label>
    </div>
  </div>
</form>
</body>
</html>