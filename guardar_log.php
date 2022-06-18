<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<p>
  <?
$_REQUEST['usuario']
$_REQUEST['contra']
$_SESSION['usario1']=$_REQUEST['usuario'];
$_SESSION['contra1']=$_REQUEST['contra'];

?>
  
</p>
<p>Se a dado de alta correctamete;</p>
<form id="form1" name="form1" method="post" action="">
  <label>
    <input type="button"  value="cerrar" onclick="cer()"/>
  </p>
  </label>
</form>
<script>
function cer(){
	window.close();
}
</script>
</body>
</html>