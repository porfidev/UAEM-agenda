<?php
session_start();
var_dump($_POST);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Documento sin título</title>
  <link href="estilos.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="contenedor">
  <div id="contenido">
    <?php

    $requestId = $_POST['contactId'];
    $conexion = mysqli_connect("localhost", "porfidev", "X36repentance") or
    die("Problemas en la conexion");
    mysqli_select_db($conexion, "agenda_proyecto") or
    die("Problemas en la seleccion de la base de datos");
    $consulta = "SELECT * FROM `persona` where cod_contacto='$requestId'";
    $consulta2 = "SELECT * FROM `cargo` where id_cargo='$requestId'";
    $con3 = "SELECT * FROM domicilio_par where cod_part='$requestId'";
    $con4 = "SELECT * FROM telefono WHERE cod_telefono='$requestId'";
    $con5 = "SELECT * FROM representante where cod_per='$requestId'";
    $con6 = "SELECT * FROM profesiones where cod_pro='$requestId'";
    $con7 = "SELECT * FROM club where cod_club='$requestId'";
    $con8 = "SELECT * FROM depedencia where cod_depencia='$requestId'";
    $con13 = "SELECT * FROM cargo where id_cargo='$requestId'";
    $con9 = "SELECT * FROM domicilio_off where cod_dom='$requestId'";
    $con10 = "SELECT * FROM telefono_off where cod_tel='$requestId'";
    $con11 = "SELECT * FROM representante_off where id_representante='$requestId'";
    $con112 = "SELECT * FROM celular where cod_celular='$requestId'";

    $sql = mysqli_query($conexion, $consulta);
    $sql2 = mysqli_query($conexion, $consulta2);
    $sql3 = mysqli_query($conexion, $con3);
    $sql4 = mysqli_query($conexion, $con4);
    $sql5 = mysqli_query($conexion, $con5);
    $sql6 = mysqli_query($conexion, $con6);
    $sql7 = mysqli_query($conexion, $con7);
    $sql8 = mysqli_query($conexion, $con8);
    $sql9 = mysqli_query($conexion, $con9);
    $sql10 = mysqli_query($conexion, $con10);
    $sql11 = mysqli_query($conexion, $con11);
    $sql12 = mysqli_query($conexion, $con112);
    $sql13 = mysqli_query($conexion, $con13);
    while ($reg = mysqli_fetch_array($sql)) {
      echo "No CONTACTO:" . $reg['cod_contacto'] . "<br>";
      echo "Nombre:" . $reg['nombre'] . "<br>";
      echo "APELLIDO_P:" . $reg['apellido_p'] . "<br>";
      echo "APELLIDO_M:" . $reg['apellido_m'] . "<br>";
      echo "TIPO DE TRATO:" . $reg['trato'] . "<br>";
      echo "ESTADO CIVIL:" . $reg['estado_civil'] . "<br>";
      echo "TRABAJA:" . $reg['trabaja'] . "<br>";
      echo "MES DE CUMPLEAÑOS:" . $reg['mes'] . "<br>";
      echo "DIA DE CUMPLEAÑOS:" . $reg['dia'] . "<br>";
      echo "SEXO:" . $reg['sexo'] . "<br>";
      echo "MAIL:" . $reg['mail'] . "<br>";
      echo "SKITEL:" . $reg['numero'] . "<br>";
      echo "FECHA DE REGUISTRO:" . $reg['fecha'] . "<br>";
    }
    echo "CELULAR" . "<br>";
    while ($reg = mysqli_fetch_array($sql12)) {
      echo "NUMERO:" . $reg['numero'] . "<br>";
      echo "COMPAÑIA:" . $reg['compa'] . "<br>";
    }
    while ($reg = mysqli_fetch_array($sql6)) {
      echo "PROFESION:" . $reg['profecion'] . "<br>";
    }
    echo "<hr>";
    echo "DOMICILIO(S) PARTCULAR:" . "<br>";
    while ($reg = mysqli_fetch_array($sql3)) {
      echo "CALLE:" . $reg['calle'] . "<br>";
      echo "NUMERO" . $reg['numero'] . "<br>";
      echo "NUMERO" . $reg['colonia'] . "<br>";
      echo "MUNICIPIO:" . $reg['municipio'] . "<br>";
      echo "ESTADO:" . $reg['estado'] . "<br>";
      echo "PAIS:" . $reg['pais'] . "<br>";
    }
    echo "" . "<br>";
    echo "TELEFONO(S) PARTICULAR" . "<br>";
    while ($reg = mysqli_fetch_array($sql4)) {
      echo "NUMERO:" . $reg['numero'] . "<br>";
    }
    echo "" . "<br>";
    echo "REPRESENTANTE PARTICULAR" . "<br>";
    while ($reg = mysqli_fetch_array($sql5)) {
      echo "NOMBRE:" . $reg['nombre'] . "<br>";
      echo "APELLIDO_P:" . $reg['apellido_p'] . "<br>";
      echo "APELLIDO_M:" . $reg['apellido_m'] . "<br>";
    }
    echo "<hr>";
    echo "Grupo SOCIAL" . "<br>";
    while ($reg = mysqli_fetch_array($sql7)) {
      echo "NOMBRE DEL CLUB:" . $reg['nombre'] . "<br>";
      echo "ACTIVIDAD:" . $reg['actividad'] . "<br>";
    }
    echo "<hr>";
    echo "DEPENDECIA" . "<br>";
    while ($reg = mysqli_fetch_array($sql8)) {
      echo "NOMBRE EMPRESA:" . $reg['nombre'] . "<br>";
      echo "COMPAÑIA" . $reg['giro_social'] . "<br>";
    }
    while ($reg = mysqli_fetch_array($sql13)) {
      echo "Cargo: " . $reg['nombre'] . "<br>";

    }
    echo "<hr>";
    echo "DOMICILIO(S) OFFICIALES:" . "<br>";
    while ($reg = mysqli_fetch_array($sql9)) {
      echo "CALLE:" . $reg['calle'] . "<br>";
      echo "NUMERO" . $reg['numero'] . "<br>";
      echo "COLONIA" . $reg['colonia'] . "<br>";
      echo "MUNICIPIO:" . $reg['municipio'] . "<br>";
      echo "ESTADO:" . $reg['estado'] . "<br>";
      echo "PAIS:" . $reg['pais'] . "<br>";
      echo "" . "<br>";
    }
    echo "TELEFONO(S) OFFICILES" . "<br>";
    while ($reg = mysqli_fetch_array($sql10)) {
      echo "NUMERO:" . $reg['numero'] . "<br>";
      echo "" . "<br>";
    }
    echo "<hr>";
    echo "REPRESENTANTE OFFICIALES" . "<br>";
    while ($reg = mysqli_fetch_array($sql11)) {
      echo "NOMBRE:" . $reg['nombre'] . "<br>";
      echo "APELLIDO_P" . $reg['apellido_p'] . "<br>";
      echo "APELLIDO_M:" . $reg['apelido_m'] . "<br>";
      echo "" . "<br>";
    }
    echo "<hr>";

    ?>
  </div>
</div>
</body>
</html>
