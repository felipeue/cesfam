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
require_once("uploadermysql.php");
$nombre = $_POST["nombre"];
$fecha = $_POST["fecha"];
$descripcion = $_POST["descripcion"];
$publico = $_POST["publico"];
$posta = $_POST["posta"];   
$img = $_FILES['imagen'];
//comprobamos si ha ocurrido un error.
if ($_FILES["imagen"]["error"] > 0)
{
  ?>
  <script languaje="javascript">
  alert("ha ocurrido un error");
  location.href = document.referrer;
  </script>
  <? 
} 
else 
{
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 10000000000;
	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024)
	{
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "img_mysql/" . $_FILES['imagen']['name'];
		//comprobamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta))
		{
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			if ($resultado)
			{
				$foto = $_FILES['imagen']['name'];
				@mysql_query("INSERT INTO evento (nombre, descripcion, fecha, posta, publico, foto) VALUES ('$nombre','$descripcion', '$fecha','$posta', '$publico','$foto')");
				 	?>
  					<script languaje="javascript">
  					alert("el archivo ha sido movido exitosamente");
  					location.href = document.referrer;
  					</script>
 					<? 
			} 
			else 
			{
					?>
  					<script languaje="javascript">
  					alert("ocurrio un error al mover el archivo.");
  					location.href = document.referrer;
  					</script>
 					<? 
			}
		} 
		else 
		{
					?>
  					<script languaje="javascript">
  					location.href = document.referrer;
  					</script>
 					<? 
			        echo $_FILES['imagen']['name'] . ", este archivo existe";
		}
	} 
	else 
	  {
	  	?>
  		<script languaje="javascript">
  		alert("archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes");
  		location.href = document.referrer;
  		</script>
 		<?
		
	  }
}

?>

?>