<?php

//creamos la sesion
session_start();
require_once("validadores2.php");//validamos si se ha hecho o no el inicio de sesion correctamente
require_once("connect.php");
//si no se ha hecho la sesion nos regresará a login.php
$aux=adminexist($_SESSION['rut']);
if($aux == TRUE) 
{
  ?>
 <script languaje="javascript">
  alert("Ya inicio sesion");
  location.href = "intranetadmin_mobile.php";
 </script>
<? 
exit(); 
}

  
?>
<!DOCTYPE HTML>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<head>
		<title>CESFAM | Isla de Maipo</title>
		<link rel="shortcut icon" href="web/images/cesfam.png">
		<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script src="web/js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="web/css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   		 <!-- webfonts -->
   		 <link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
   		  <!-- webfonts -->
	</head>
	<body>
		<!-- container -->
			<!-- header -->
			<div class="header header-border">
				<div class="container">
					<!-- logo -->
					<div class="logo">
						<a href="index.html"><img src="web/images/logo_cesfam_mobile.png" title="medicalpluse" /></a>
					</div>
					<!-- logo -->
					<!-- top-nav -->
					<div class="top-nav">
						<span class="menu"> </span>
						<ul>
							<li ><a href="index.php">Inicio</a></li>
							<li><a href="about_mobile.html">Nosotros</a></li>
							<li><a href="postas_mobile.html">Postas</a></li>
							<li><a href="funcionarios_mobile.php">Funcionarios</a></li>
							<li><a href="contact_mobile.html">Contacto</a></li>
						</ul>
					</div>
					<!-- top-nav -->
						<!-- script-for-nav -->
						<script>
							$(document).ready(function(){
								$("span.menu").click(function(){
									$(".top-nav ul").slideToggle(300);
								});
							});
						</script>
						<!-- script-for-nav -->
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- /header -->
		</div>
		<!-- /container -->
		</div>
		<!-- Contact -->
		<div class="contact">
				<div class="container">

					<div class="contact-grids">
					
					<h1>Portal Administrativo</h1>
					
						<div class="contact-form contact-form-row2">
							<form action ="adminval_mobile.php" method="post">
								<div>
									<div>
										<span>Rut:</span><br>
										<input type="text" class="text" name="rut" id="rut" required>
									</div>
									<div class="clearfix"> </div>
								</div><br>
									<div>
									<div>
										<span>Password :</span><br>
										<input type="password" class="text" name="pass" id="pass" required>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div> 
								<input type="submit" value="ingresar">
							</form>
						</div>
						<!----- contact-form ------>
					</div>
					<!----- contact-grids ----->
				</div>
			</div>
		<!-- /Contact -->
		</div>
			
		<!-- team-grids-caption -->
		<div class="team-grids-caption">
								<div class="container">
									<div class="team-grids-caption-left">
										<h4>Información de contacto</h4>
										<p>Visite nuestra pagina de contacto, para direcciones (mapa), telefonos o envienos un correo, nos podremos en contacto a la brevedad</p>
									</div>
									<div class="team-grids-caption-right">
										<a class="team-btn" href="contact.html">Contacto</a>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
		<!-- team-grids-caption -->
		<!-- footer -->
		<div class="footer">
			<div class="container">
				<p class="copy-right"><a href="http://cl.linkedin.com/in/feliperioss" style="text-decoration:none;"><span style="font: 80% Arial,sans-serif; color:#0783B6;"><img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_in_20x15.png" width="20" height="15" alt="Ver el perfil de Felipe Rios en LinkedIn" style="vertical-align:middle;" border="0"></span>¿Quién hizo esto?</a></p>
		</div>
		<!-- /footer -->
	</body>
</html>
