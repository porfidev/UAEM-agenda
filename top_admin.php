<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="contenedor">
<div id="header">
  <div id="datosusuario">
    <p>Nombre: <strong><?php echo $_SESSION['usuario_activo'] ?></strong><br />
    Tipo: <strong><?php echo $_SESSION['tipo_usuario'] ?></strong></p>
    <p><a href="1pro.php" target="mainFrame"><img src="imagenes/boton_agregar.jpg" width="157" height="40" border="0" /></a>
    <?php if($_SESSION['tipo_usuario'] == "admin") { ?>
    <a href="consulta.php" target="mainFrame"><img src="imagenes/boton_consultar.jpg" width="157" height="40" border="0" /></a> 
    <?php } ?>
    <a href="loggin.php" target="_parent"><img src="imagenes/boton_cerrar.jpg" width="157" height="40" border="0" /></a></p>
    </a>
  </div>
</div>
</div>
</body>
</html>
