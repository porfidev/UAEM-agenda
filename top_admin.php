<?php
session_start();

$activeUser = $_SESSION['usuario_activo'];
$userType = $_SESSION['tipo_usuario'];
$html = <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>Documento sin título</title>
  <link href="estilos.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="contenedor">
  <div id="header">
    <div id="datosusuario">
      <p>Nombre: <strong>$activeUser</strong><br/>
        Tipo: <strong>$userType</strong></p>
      <p>
        <a href="contactos.php" target="mainFrame">
          <img src="imagenes/boton_consultar.jpg" width="157" height="40" border="0"/>
        </a>
        <a href="agregar_contacto.php" target="mainFrame">
          <img alt="agregar" src="imagenes/boton_agregar.jpg" width="157" height="40"border="0"/>
        </a>
        <a href="logout.php" target="_parent">
          <img alt="cerrar sesión" src="imagenes/boton_cerrar.jpg" width="157" height="40" border="0"/>
        </a>
      </p>
    </div>
  </div>
</div>
</body>
</html>
HTML;

echo $html;
