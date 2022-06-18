<? 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
function validar(preguntar)

{
if(preguntar.calle.value.length==0)
  {
  alert("campo calle vacio");
  preguntar.calle.focus();
  return (false);
  }
  if(preguntar.numero.value.length==0)
  {
  alert("campo numero vacio");
  preguntar.numero.focus();
  return (false);
  }
  if(preguntar.colonia.value.length==0)
  {
  alert("campo colonia vacio");
  preguntar.colonia.focus();
  return (false);
  }if(preguntar.municipio.value.length==0)
  {
  alert("campo municipio vacio");
  preguntar.municipio.focus();
  return (false);
  }
if(preguntar.estado.value.length==0)
  {
  alert("campo estado vacio");
  preguntar.estado.focus();
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
<p>No.Contacto</span>
<?php
$a=$_SESSION['a'];
echo "".$a."";
?>
</p>
<div id="contenedor">
	<div id="contenido">
<form  name="preguntar" method="post"  onsubmit="return validar(this)" action="guar_dom_off.php">
  <div align="center">
    <table width="200" border="1">
      <tr>
        <td class="Estilo1">Calle</td>
        <td class="Estilo1"><div align="center">
          <input name="calle" type="text" class="campologin" id="calle" />
        </div></td>
        <td class="Estilo1">Número</td>
        <td class="Estilo1"><div align="center">
          <input name="numero" type="text" class="campologin" id="numero" onblur='if(this.value==&quot;&quot;) alert(&quot;llena el campo&quot;)'
/>
        </div></td>
      </tr>
      <tr>
        <td class="Estilo1">Colonia</td>
        <td class="Estilo1"><div align="center">
          <input name="colonia" type="text" class="campologin" id="colonia" onblur='if(this.value==&quot;&quot;) alert(&quot;llena el campo&quot;)'
 />
        </div></td>
        <td class="Estilo1">Municipio</td>
        <td class="Estilo1"><div align="center">
          <input name="municipio" type="text" class="campologin" id="municipio" onblur='if(this.value==&quot;&quot;) alert(&quot;llena el campo&quot;)'
 />
        </div></td>
      </tr>
      <tr>
        <td class="Estilo1">Estado</td>
        <td class="Estilo1"><select name="estado" class="campologin" id="estado">
          <option value='0'>Elige Estado</option>
          <option>Zacatecas</option>
          <option>Veracruz </option>
          <option>Tlaxcala</option>
          <option>Tamaulipas</option>
          <option>Tabasco</option>
          <option>Sonora</option>
          <option>Sinaloa</option>
          <option>Quintana Roo</option>
          <option>Puebla</option>
          <option>Oaxaca</option>
          <option>Nayarit</option>
          <option>Morelos</option>
          <option>México</option>
          <option>Jalisco</option>
          <option>Hidalgo</option>
          <option>Guerrero</option>
          <option>Guanajuato</option>
          <option>Durango</option>
          <option>Distrito Federal</option>
          <option>Colima</option>
          <option>Coahuila de Zaragoza</option>
          <option>Chihuahua</option>
          <option>Chiapas</option>
          <option>Campeche</option>
          <option>Baja California Sur</option>
          <option>Baja California</option>
          <option>Aguascalientes</option>
          <option>Yucatán</option>
          <option>Querátaro de Arteaga</option>
          <option>San Luis de Potosí</option>
          <option>Nuevo León</option>
          <option>Michoacán de Ocampo</option>
          <option>otro estado</option>
        </select></td>
        <td class="Estilo1">País</td>
        <td class="Estilo1"><select name="pais" class="campologin" id="pais">
          <option>Argelia</option>
          <option>Argentina</option>
          <option>Australia</option>
          <option>Belice</option>
          <option>Bielorrusia</option>
          <option>Bolivia</option>
          <option>Brasil</option>
          <option>Bélgica</option>
          <option>Camerún</option>
          <option>Canadá</option>
          <option>Chile</option>
          <option>Colombia</option>
          <option>Costa Rica</option>
          <option>Ecuador</option>
          <option>El Salvador</option>
          <option>Emiratos Árabes Unidos</option>
          <option>España</option>
          <option>Estados Unidos</option>
          <option>Filipinas</option>
          <option>Francia</option>
          <option>Guatemala</option>
          <option>Guyana</option>
          <option>Honduras</option>
          <option>Hong-Kong</option>
          <option>India</option>
          <option>Indonesia</option>
          <option>Irlanda</option>
          <option>Italia</option>
          <option>Malasia</option>
          <option>Marruecos</option>
          <option selected="selected">México</option>
          <option>Nicaragua</option>
          <option>Nueva Zelanda</option>
          <option>Pakistán</option>
          <option>Panamá</option>
          <option>Paraguay</option>
          <option>Perú</option>
          <option>Polonia</option>
          <option>Portugal</option>
          <option>Puerto Rico</option>
          <option>Reino Unido</option>
          <option>República Dominicana</option>
          <option>Rusia</option>
          <option>Singapur</option>
          <option>Sudáfrica</option>
          <option>Suiza</option>
          <option>Suriname</option>
          <option>Tailandia</option>
          <option>Taiwán</option>
          <option>Túnez</option>
          <option>Ucrania</option>
          <option>Uruguay</option>
          <option>Venezuela</option>
          <option>Zimbabue</option>
        </select></td>
      </tr>
      <tr>
        <td class="Estilo1">Telefono</td>
        <td class="Estilo1"><div align="center">
          <input name="trabaja3" type="checkbox" id="trabaja3" onclick="MM_openBrWindow('telefono_off.php','','width=600','height=300')" />
        </div></td>
        <td class="Estilo1">Representante</td>
        <td class="Estilo1"><div align="center">
          <input name="trabaja" type="checkbox" id="trabaja" onclick="MM_openBrWindow('representante_off.php','','width=600','height=300')" />
        </div></td>
      </tr>
    </table>
  </div>
    </label>
  <div align="left"></div>
  <p align="left">&nbsp;</p>
        <input name="button" type="submit" class="botonalpha" id="button" value="Guardar y Agregar otro" />
         <input name="button3" type="button" class="botonalpha" value="Cerrar" onclick="cerrar();" />
</form>
</div>
</div>

</body>
</html>