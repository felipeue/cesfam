<?php

//creamos la sesion
session_start();
require_once("connect.php");
require_once("validadores.php");
//validamos si se ha hecho o no el inicio de sesion correctamente

//si no se ha hecho la sesion nos regresará a login.php

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
						<a href="index.html"><img src="web/images/logo_cesfam.png" title="medicalpluse" /></a>
					</div>
					<!-- logo -->
					<!-- top-nav -->
					<div class="top-nav">
						<span class="menu"> </span>
						<ul>
							<li ><a href="intranetadmin.php">Inicio</a></li>
							<li ><a href="subir.php">Subir documento</a></li>
							<li ><a href="borrar.php">Documentos</a></li>
							<li><a href="eventoadm.php">Publicar Evento</a></li>
							<li><a href="estadistica.php">Estadisticas</a></li><br>
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
								
									<div class="services-left-grids">

										<div class="col-md-6 services-left-grid ">
											<h3>Subir estadistica</h3>
	  <form action="uploader_estadistica.php" method="post" enctype="multipart/form-data">
      <p>Nombre: <br> <input type="text" maxlength="30" name="nombre" class="negro" required></p>
      <p>Año: <br>  <input type="text" class= "negro" maxlength="4" name="ano" required/><br></p>
      <p>Descripcion <br> <textarea name="descripcion" maxlength="280" cols="30" rows="6" class="negro" required></textarea><br /></p>
      <p>Tipo<br> 
      <select class="negro" size="1" name="tipo">
      <option selected value="correcciones">Correcciones</option>
      <option value="enviados">Enviados</option>
      <option value="rem_comentado">REM Comentado</option>
      <option value="rem_oficial">REM Oficial</option>
      <option value="varios">Varios</option>
      </select><br>
      </p>
      <p>Documento</p>
      <p><input name="documento" type="file" id="documento" /></p>
      <br>
      <p class="negro"><input value="Publicar estadistica" type="submit" required/></p>  
    </form>
									    </div>
										<div class="clearfix"> </div>
										<ul class="pagenation">
											
										</ul>
									</div>
								</div>
								<div class="col-md-3 services-right">
									
									</ul>
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