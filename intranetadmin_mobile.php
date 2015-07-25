<?php

//creamos la sesion
session_start();
require_once("connect.php");
require_once("validadores2.php");
//validamos si se ha hecho o no el inicio de sesion correctamente

//si no se ha hecho la sesion nos regresará a login.php

if(!isset($_SESSION['rut'])) 
{
  ?>
 <script languaje="javascript">
  alert("Debe iniciar sesison primero");
  location.href = "admin_mobile.php";
 </script>
<? 
  exit();
}
?>
<!DOCTYPE HTML>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<html>
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
							<li class="active"><a href="intranetadmin_mobile.php">Inicio</a></li>
							<li><a href="subir_mobile.php">Subir documento</a></li>
							<li ><a href="borrar_mobile.php">Documentos</a></li>
							<li><a href="eventoadm_mobile.php">Publicar Evento</a></li>
							<li><a href="estadistica_mobile.php">Estadisticas</a></li>
							<li><a href="logout.php">Cerrar Sesion</a></li>
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
		<!-- Services -->
		<div class="services">
						<div class="container">
							<div class="services-grids">
								<div class="col-md-9 services-left">
									
									<h1>Bienvenido <?php echo $_SESSION['nombre']; ?></h1>
									<div class="services-left-grids">
										<div class="col-md-6 services-left-grid">
											<h3>Nuevo Funcionario</h3>
											<p>Ingrese para nuevo funcionario a CESFAM</p>
											<a class="more-btn" href="funcionario_form_mobile.php">Ingresar</a>
										</div>

										<div class="col-md-6 services-left-grid">
											<h3>Borrar Funcionario</h3>
											<p>Borrar funcionario de CESFAM</p>
											<a class="more-btn" href="funcionario_borrar_mobile.php">Ingresar</a>
										</div>
										<div class="col-md-6 services-left-grid">
											<h3>Subir estadistica</h3>
											<p>Subir nuevo documento estadistico</p>
											<a class="more-btn" href="subir_estadistica_mobile.php">Ingresar</a>
										</div>
										<div class="col-md-6 services-left-grid">
											<h3>Borrar evento</h3>
											<p>Borrar evento de CESFAM</p>
											<a class="more-btn" href="evento_borrar_mobile.php">Ingresar</a>
										</div>
										<div class="col-md-6 services-left-grid">
											<h3>Examenes</h3>
											<p>Ingrese para poder ver el portal de examenes de CESFAM</p>
											<a class="more-btn" href="#">Entrar</a>
										</div>
										<div class="col-md-6 services-left-grid">
											<h3>Cambiar clave</h3>
											<p>Ingrese para poder cambiar clave del portal de CESFAM</p>
											<a class="more-btn" href="cambiarclaveadm_mobile.php">Entrar</a>
										</div>
											
										<div class="clearfix"> </div>
										<ul class="pagenation">
											
										</ul>
									</div>
								</div>

								<div class="clearfix"> </div>
							</div>
						</div>
		<!-- team -->

		<!-- team -->
		</div>
			</div>
		<!-- Services -->
		<!-- team-grids-caption -->
		<div class="team-grids-caption">
								<div class="container">
									<div class="team-grids-caption-left">
										<h4></h4>
										<p></p>
									</div>
									<div class="team-grids-caption-right">
										
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
		<!-- team-grids-caption -->
		<!-- footer -->
		<div class="footer">
			<div class="container">
				<p class="copy-right"><a href=""></a></p>
							<div class="team-grids-caption-right">
                <p class="copy-right"><a href="admin.php"></a></p>
			</div>
			</div>
		</div>
		<!-- /footer -->
	</body>
</html>