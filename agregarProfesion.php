<?php
require_once("utils/ConexionBBDD.php");
session_start();

if (!$_SESSION["autorizado"]) {
  die("Usuario no autorizado");
}

if (!isset($_POST["name"]) || !$_POST["name"]) {
  die("Datos inválidos");
}

try {
  $name = filter_var($_POST["name"], FILTER_UNSAFE_RAW);

  $conexion = ConexionBBDD::getInstance()->getConnection();

  $addQuery = <<<SQL
    INSERT INTO profesiones (nombre)
    VALUES (?)
    SQL;

  $stmt = $conexion->prepare($addQuery);
  $stmt->bind_param('s', $name);
  $result = $stmt->execute();
  $lastInsertId = mysqli_stmt_insert_id($stmt);
  $stmt->close();

  if (!$result) {
    http_response_code(400);
    die('No se pudo agregar la profesión');
  } else {
    $response = ["id" => $lastInsertId, "message" => "Profesión agregada"];
    echo json_encode($response);
  }
} catch (Exception $exception) {
  http_response_code(500);
  echo $exception->getMessage();
}
