<?php

//creamos la sesion
session_start();

//validamos si se ha hecho o no el inicio de sesion correctamente

//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['rut'])) 
{
  header('Location: index.html'); 
  exit();
}
?>
<?php
header("Content-Type: text/html;charset=utf-8");
require_once("connect.php");
require_once("validadores.php");
$id = $_POST["id"];
$result = mysql_query("DELETE from evento WHERE id = '$id'");

	if($row["id"]==$id)
	{
	?>
	<script languaje="javascript">
  		alert("no se pudo borrar funcionario");
  		location.href = document.referrer;
  		</script>
 	<?
    }
	else
	{
		?>
		<script languaje="javascript">
  		alert("funcionario borrado");
  		location.href = document.referrer;
  		</script>
 		<?
 	}

?>