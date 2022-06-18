<?
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Documento sin título</title>
  <link href="estilos.css" rel="stylesheet" type="text/css"/>
</head>
<div id="contenedor">
  <div id="contenido">
    <body>
    <h2>Contactos</h2>
    <?php
    $conexion = mysqli_connect("localhost", "porfidev", "X36repentance")
    or die("Problemas en la conexion");
    mysqli_select_db($conexion, "agenda_proyecto") or
    die("Problemas en la seleccion de la base de datos");
    $registros = mysqli_query($conexion, "select * from persona");
    $innerHTML = '';
    while ($reg = mysqli_fetch_array($registros)) {

      $id = $reg['cod_contacto'];
      $name = $reg['nombre'];
      $lastName = $reg['apellido_p'];

      $innerHTML .= <<<HTML
                        <tr>
                          <td>$name $lastName</td>
                          <td>
                            <form action="detalle_persona.php?contactId=$id" method="post">
                                <input type="hidden" value="$id" name="contactId" />
                                <button type="submit">Ver detalles</button>
                            </form>
                          </td>
                          <td>
                            <form action="detalle_persona.php?contactId=37" method="post">
                                <input type="hidden" value="37" name="bizcochito" />
                                <button type="submit">Eliminar</button>
                            </form>
                          </td>
                        </tr>
                HTML;
    }

    $html = <<<HTML
    <div class="contacto">
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th colspan="2"></th>
          </tr>
        </thead>
        <tbody>
          $innerHTML
        </tbody>
      </table>
    </div>
    HTML;

    echo $html;
    ?>
  </div>
</div>
</body>
</html>
