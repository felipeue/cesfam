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
$nombre = $_POST["nombre"];   
$apellido = $_POST["apellido"];
$rut = $_POST["rut"];
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];
$direccion = $_POST["direccion"];
$email = $_POST["mail"];
$cargo = $_POST["cargo"];
$sector = $_POST["sector"];
$anexo = $_POST["anexo"];
$jornadas = $_POST["jornadas"];
$nivel = $_POST["nivel"];
$categorias = $_POST["categoria"];
$fecha_ingreso = $_POST["fecha_ingreso"];
$v1 = valnom($nombre);
$v2 = valnom($apellido);
$v3 = valida_rut($rut);
$v4 = valpassword($pass,$pass2);
$v5 = valdireccion($direccion);
$v6 = valmail($email);
$v7 = valcargo($cargo);
$v8 = valsector($sector);
$v9 = valanexo($anexo);
$v10 = valjornadas($jornadas);
$v11 = valnivel($nivel);
$v12 = valcategoria($categorias);
$v13 = valfecha($fecha_ingreso);
$valreg = mysql_query("SELECT * FROM usuario WHERE rut = '$rut'");
if($row = mysql_fetch_array($valreg))
{
  if($row["rut"]==$rut)
  {
  ?>
  <script languaje="javascript">
  alert("Funcionario ya registrado, ingrese otro");
  location.href = document.referrer;
  </script>
  <? 
  }	
}
if ($v1 == TRUE && $v2 == TRUE && $v3 == TRUE && $v4 == TRUE && $v5 == TRUE && $v6 == TRUE && $v7 == TRUE && $v8 == TRUE && $v9 == TRUE && $v10 == TRUE && $v11 == TRUE && $v12 == TRUE && $v13 == TRUE)
{
	mysql_query("INSERT INTO usuario(nombre, apellido, rut, password, direccion, mail, cargo, sector, anexo, fecha_ingreso, jornadas, nivel, categoria) VALUES ('$nombre', '$apellido', '$rut', '$pass', '$direccion','$email','$cargo', '$sector', '$anexo', '$fecha_ingreso', '$jornadas', '$nivel', '$categorias')"); 
  ?>
  <script languaje="javascript">
  alert("Funcionario registrado");
  location.href = document.referrer;
  </script>
  <? 
} 
?>

