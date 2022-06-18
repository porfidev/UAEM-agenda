<?
session_start();

if(isset($_SESSION['autorizado']) && $_SESSION['autorizado'] == "si")
	{
	//echo $_SESSION['usuario_activo']."es un usuario autorizado";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
</head>
<frameset rows="140,*" frameborder="yes" border="0" framespacing="0">
  <frame src="top_admin.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
  <frame src="1pro.php" name="mainFrame" id="mainFrame" title="principal" />
</frameset>
<noframes><body>
</body></noframes>
</html>

<?

	}
	?>