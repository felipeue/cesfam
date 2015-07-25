<?php

//creamos la sesion
session_start();
require_once("connect.php");
require_once("validadores.php");
//validamos si se ha hecho o no el inicio de sesion correctamente

//si no se ha hecho la sesion nos regresará a login.php
$aux=admin($_SESSION['rut']);
if($aux == FALSE)
{
    ?>
 <script languaje="javascript">
  alert("Debe iniciar sesison primero");
  location.href = "admin.php";
 </script>
<? 
  exit();
}
if(!isset($_SESSION['rut'])) 
{
  ?>
 <script languaje="javascript">
  alert("Debe iniciar sesison primero");
  location.href = "intranet.php";
 </script>
<? 
  exit();
}
?>
<!DOCTYPE HTML>
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
							<li ><a href="intranetadmin_mobile.php">Inicio</a></li>
							<li><a href="subir_mobile.php">Subir documento</a></li>
							<li><a href="borrar_mobile.php">Documentos</a></li>
							<li><a href="eventoadm_mobile.php">Publicar Evento</a></li>
							<li><a href="estadistica_mobile.php">Estadisticas</a></li>
							<li><a href="logout_mobile.php">Cerrar Sesion</a></li>
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
									<h1>Estadisticas</h1>
									<div class="services-left-grids">
										<div class="services-left-grids">
                    <div class="col-md-6 services-left-grid container">
                      
                      <a class="caption-btn" href="correcciones_mobile.php">Correcciones</a>
                    </div>
                    <div class="col-md-6 services-left-grid container">
                      <a class="caption-btn" href="enviados_mobile.php">Enviados</a>
                       

                    </div>
                    <div class="col-md-6 services-left-grid">
                    <a class="caption-btn" href="remcomentado_mobile.php">REM Comentado</a>
                      
                    </div>
                                        <div class="col-md-6 services-left-grid">
                    <a class="caption-btn" href="remoficial_mobile.php">REM Oficial</a>
                      
                    </div>
                    <div class="col-md-6 services-left-grid">
                      <a class="caption-btn" href="estvarios_mobile.php">Varios</a>
                      
                    </div>
										
										<div class="clearfix"> </div>

									</div>
								</div>
								<div class="col-md-3 services-right">
									
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