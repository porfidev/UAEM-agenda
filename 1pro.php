<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { 
  window.open(theURL,winName,features);
}
function validar(alta)
{
 if(alta.contacto.value.length==0)
  {
  alert("campo contacto vacio");
  alta.contacto.focus();
  return (false);
  }
if(alta.nombre.value.length==0)
   {
   alert("campo nombre vacio");
   alta.nombre.focus();
   return (false);
   }
if(alta.a_p.value.length==0)
    {
    alert("campo apellido_p vacio");
    alta.a_p.focus();
    return (false);
    }
if(alta.a_m.value.length==0)
     {
     alert("campo apellido_m vacio");
     alta.a_m.focus();
     return (false);
     }
if(alta.trato.value.length==0)
      {
      alert("campo trato vacio");
      alta.trato.focus();
      return (false);
      }
if(alta.dia.value==0)
        {
        alert("campo dia vacio");
        alta.dia.focus();
        return (false);
        }
if(alta.mes.value==0)
         {
         alert("campo mes vacio");
         alta.mes.focus();
         return (false);
         }
if(alta.skitel.value==0)
          {
          alert("campo skitel vacio");
          alta.skitel.focus();
          return (false);
          }
if(alta.sexo.value.length==0)
           {
           alert("campo sexo vacio");
           alta.sexo.focus();
           return (false);
           }
if(alta.mail.value.length==0)
            {
            alert("campo email vacio");
            alta.mail.focus();
            return (false);
            }
if(confirm("¿desea guardar el registro?"))
          {
            alert("!guardando registro!");
		  }
		  else
		   {
		    document.alta.reset("1pro.php")
		   return false;
		   }
}
</script>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="contenedor">
	<div id="contenido">
<p>
<?php
$fecha_actual = localtime(time(),1);
$anyo_actual = $fecha_actual['tm_year'] + 1900;
$mes_actual = $fecha_actual['tm_mon'] + 1;
$dia_actual = $fecha_actual['tm_mday'];
$fecha="$anyo_actual/$mes_actual/$dia_actual";
$aleatorio=rand(1,1000); 
$_SESSION['a']=$aleatorio;
?>
</p>
<p>&nbsp;</p>
<form  name="alta" method="post" onSubmit="return validar(this)" action="guar_per.php">
  <div align="center">
    <h3>Datos Personales </h3>
    <table width="600" border="0">
      <tr>
        <td align="right"><p><strong>No. de Contacto:</strong></p></td>
        <td colspan="3"><input name="contacto" type="text" class="campologin" id="contacto" value="<?php echo "$aleatorio" ?>" disabled="disabled" /></td>
        </tr>
      <tr>
        <td width="139" align="right"><p><strong>Nombre:</strong></p></td>
        <td width="451" colspan="3"><input name="nombre" type="text" class="campologin" id="nombre" /></td>
        </tr>
      <tr>
        <td align="right"><p><strong>Apellido Paterno:</strong></p></td>
        <td colspan="3"><input name="a_p" type="text" class="campologin" id="a_p" /></td>
        </tr>
      <tr>
         <tr>
        <td align="right"><p><strong>Apellido Materno:</strong></p></td>
        <td colspan="3"><input name="a_m" type="text" class="campologin" id="a_m" /></td>
        </tr>
        <td align="right"><p><strong>Sexo:</strong></p></td>
        <td colspan="3">  <select name="sexo" class="botonalpha" id="sexo">
        <option value="0" selected="selected">SELECT</option>
        <option>MASCULINO</option>
        <option>FEMENINO</option>
      </select></td>
      </tr>
   
        
      </table>
      <h3>Situaci&oacute;n Social</h3>
      <table width="600" border="0">
      <tr>
        <td><table width="600" border="0">
          <tr>
            <td>Forma de trato</td>
            <td colspan="3"><select name="trato" class="botonalpha" id="trato">
              <option value="0" selected="selected">- seleccione uno -</option>
              <option>Tu</option>
              <option>Usted</option>
            </select></td>
            </tr>
          <tr>
            <td colspan="2" align="center"><input name="button2" type="button" class="botonalpha" onclick="MM_openBrWindow('2pro.php','','width=630','height=300')" value="Agregar Profesi&oacute;n" /></td>
            <td colspan="2" align="center"><input name="domicilio" type="button" class="botonalpha" onclick="MM_openBrWindow('domicilio.php','','width=630','height=300')" value="Agregar Domicilio" id="domicilio" /></td>
          </tr>
  <td class="Estilo1">Estado Civil</td>
    <td>
      <table width="200">
        <tr>
         
          <td>
            <label>
              <input type="radio" name="estado" value="casado" id="estado_0" onclick="if(this.checked){document.alta.estado.disabled= true;document.alta.estado1.disabled= true;document.alta.estado2.disabled=true;document.alta.estado3.disabled= true;} else{document.alta.estado1.disabled= false;document.alta.estado2.disabled=false;document.alta.estado3.disabled= false;}MM_openBrWindow('estado.php','','width=600','height=300');">
              Casado</label>
          </td>
        </tr>
        <tr>
          <td>
            <label>
              <input type="radio" name="estado1" value="viudo" id="estado_1" method=$_POST['viudo']/>
              Viudo</label>
          </td>
        </tr>
        <tr>
          <td>
            <label>
              <input type="radio" name="estado2" value="soltero" id="estado_2" />
              Soltero</label>
          </td>
        </tr>
        <tr>
          <td>
            <label>
              <input type="radio" name="estado3" value="divorciado" id="estado_3" />
              Divorciado</label>
          </td>
        </tr>
      </table></td>
    <td>Trabaja</td>
    <td><table width="200">
      <tr>
        <td><label>
          <input name="trabaja" type="radio" id="trabaja_1" onclick="MM_openBrWindow('trabajo.php','','width=630','height=300')" value="si" />
          Si</label></td>
      </tr>
      <tr>
        <td><label>
          <input type="radio" name="trabaja" value="no" id="trabaja_4" />
          No</label></td>
      </tr>
    </table></td>
    <tr>
    <td>Día De Cumpleaños</td>
    <td><div align="center">
      <select name="dia" class="botonalpha" id="dia">
        <option value="0" selected="selected">SELECT</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>24</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
      </select>
    </div></td>
    <td>Mes De Cumpleaños</td>
    <td><div align="center">
      <select name="mes" class="botonalpha" id="mes">
        <option value="0" selected="selected">SELECT</option>
        <option>ENERO</option>
        <option>FEBRERO</option>
        <option>MARZO</option>
        <option>ABRIL</option>
        <option>MAYO</option>
        <option>JUNIO</option>
        <option>JULIO</option>
        <option>AGOSTO</option>
        <option>SEPTIEMBRE</option>
        <option>OCTUBRE</option>
        <option>NOVIEMBRE</option>
        <option>DICIEMBRE</option>
      </select>
    </div></td>
    </tr>
    </table>
    <div align="center"><h3>Contacto</h3></div>
    <table width="600" border="0">
      <td align="right"><strong>Celular:</strong></td>
    <td colspan="3" align="left"><div align="center">
      <input name="celular" type="button" class="botonalpha" id="celular" onclick="MM_openBrWindow('celular.php','','width=630','height=300')" value="Agregar Celular" />
    </div></td>
  </tr>
  <tr>
    <td align="right"><strong>Skitel:</strong></td>
    <td colspan="3" align="left"><div align="center">
      <input name="skitel" type="text" class="campologin" id="skitel" />
      </div>      <div align="center">
        
      </div></td>
    </tr>
  <tr>
    <td align="right"><strong>Mail:</strong></td>
    <td colspan="3" align="left"><div align="center">
      <input name="mail" type="text" class="campologin" id="mail" />
    </div></td>
    </tr>
    <tr>
    <td align="right"><strong>Fecha Captura:</strong></td>
    <td align="left"><div align="center">
      <input name="fec" type="text" disabled class="campologin" id="fec" value="<?php echo "$fecha";?>"      />
       <input name="fecha" type="hidden" value="<?php echo "$fecha";?>"      />
    </div></td>
  </tr>
  <tr>
    <td align="right"><strong>Grupo social:</strong></td>
    <td align="left"><div align="center">
      <input name="trabaja5" type="button" class="botonalpha" id="trabaja5" onclick="MM_openBrWindow('club.php','','width=630','height=300')" value="Agregar Red Social" />
    </div></td>
  </tr>
        </table></td>
      </tr>
      </table>
      <div align="center"><br />
      </p>
    </div>
  </div>
  <p align="center" class="Estilo1">
    <label>
    <input name="button" type="submit" class="botonalpha" id="button" value="Enviar" />
  </label>
</p>
</form>

<div align="center">
           
</div>
</div>
</div></body>
</html>