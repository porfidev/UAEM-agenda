<?php
session_start();

$usuario = $_POST["usuario"];
$contrasena = $_POST["contra"];

$conexion = mysqli_connect("localhost", "porfidev", "X36repentance") or
die("Problemas en la conexion");
mysqli_select_db($conexion, "agenda_proyecto") or
die("Problemas en la seleccion de la base de datos");

$registros = mysqli_query($conexion, "SELECT * FROM usuarios_bd WHERE nombre = '$usuario' AND pass ='$contrasena'") or
die("Problemas en el select:" . mysqli_error($conexion));
if (mysqli_num_rows($registros) == 0) {
  echo "El usuario y/o contraseña no existen, favor de registrarse";
  exit;
}

while ($reg = mysqli_fetch_array($registros)) {
  if ($reg["tipo"] == "admin") {
    $_SESSION['usuario_activo'] = $reg["nombre"];
    $_SESSION['autorizado'] = "si";
    $_SESSION['tipo_usuario'] = $reg["tipo"];
    Header("Location: administrador.php");
  } else {
    $_SESSION['usuario_activo'] = $reg["nombre"];
    $_SESSION['autorizado'] = "si";
    $_SESSION['tipo_usuario'] = $reg["tipo"];
    Header("Location: administrador.php");
  }
}
mysqli_close($conexion);
