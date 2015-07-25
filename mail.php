<?php
date_default_timezone_set('America/Santiago');
header("Content-Type: text/html;charset=utf-8");
require_once("validadores.php");
$aviso = "";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
valnom($nombre);
valmail($email);
valnum($telefono); 
$myDate = date('m/d/Y');
$myHour = date("G:i:s");
$fecha = $myDate." ".$myHour;
if ($_POST['mensaje']) 
{
	
}
if ($_POST['email'] != "") {
	// email de destino
	$email = "felipe.rios@mail.udp.cl";
	
	// asunto del email
	$subject = "Contacto";
	
	// Cuerpo del mensaje
	$mensaje = "---------------------------------- \n";
	$mensaje.= "            Contacto               \n";
	$mensaje.= "---------------------------------- \n";
	$mensaje.= "NOMBRE:   ".$_POST['nombre']."\n";
	$mensaje.= "EMAIL:    ".$_POST['email']."\n";
	$mensaje.= "TELEFONO: ".$_POST['telefono']."\n";
    $mensaje.= "FECHA:  ".$fecha."\n";
	$mensaje.= "---------------------------------- \n\n";
	$mensaje.= $_POST['mensaje']."\n\n";
	$mensaje.= "---------------------------------- \n";
	$mensaje.= "Enviado desde http://cesfamidm.cl \n";
	
	// headers del email
	$headers = "From: ".$_POST['email']."\r\n";
	
	// Enviamos el mensaje
	if (mail($email, $subject, $mensaje, $headers)) 
	{
	    ?>
 			<script languaje="javascript">
  			alert("Mensaje enviado");
  			location.href = "contact.html";
			</script>
		<?
	} else 
	{
	    ?>
 			<script languaje="javascript">
  			alert("Error de envio");
  			location.href = "contact.html";
			</script>
		<?
	}
}
?> 

