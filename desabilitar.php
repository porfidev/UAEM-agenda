<!DOCTYPE HTML PUBLIC>
<html>
<head>
<script language="javascript">
function bloquear()
{
	if(this.checked){
		document.chek.a3.disabled=true;
		document.chek.b1.disabled=true;
		document.chek.b2.disabled=true;
		document.chek.b3.disabled=true;} 
	else
		{
		document.chek.b1.disabled=false;
		document.chek.b2.disabled=false;
		document.chek.b3.disabled=false;
		}
}

function MM_openBrWindow(theURL,winName,features) { 
  window.open(theURL,winName,features);
}

</script>
</head>
<body>
<form name="chek">
<table border=1>
<tr>
<td>
Grupo A<br>
<div id="diva">Ocultar/Mostrar<input type="checkbox" name="a1" onclick= "if(this.checked) {document.getElementById('diva').style.visibility= 'hidden'}else{document.getElementById('diva').style.visibility= 'visible'}">
<br></div>
Activar/Desactivar<input type="checkbox" name="a3" onClick="bloquear();" >
</td>
<td>
grupo B<br>
<div id=divB>

B1<input type="radio" name="b1" ><br>
B2<input type="radio" name="b2" ><br>
B3<input type="radio" name="b3" >
</div>
</td>
</tr>
</table>
</form>
</body>
</html>