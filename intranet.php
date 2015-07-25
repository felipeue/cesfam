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
  location.href = "funcionarios.php";
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
							<li class="active"><a href="intranet.php">Inicio</a></li>
							<li><a href="documentos.php">Documentos</a></li>
							<li ><a href="eventos.php">Eventos</a></li>
							<li><a href="estadisticasu.php">Estadisticas</a></li>
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
											<?php
require_once("connect.php");
$rut = $_SESSION['rut'];
$result = mysql_query("SELECT rut, nombre, apellido, direccion, mail, cargo, sector, anexo, fecha_ingreso, jornadas, nivel, categoria FROM usuario WHERE rut = '$rut'");
     while ($row = mysql_fetch_row($result))
     { 
      $aux = $row[1];
      $ruta = "img_mysql/" . $aux; 
      $nombre = ucwords($row[1]);
      $apellido = ucwords($row[2]);

      echo "
      <h2 class = 'mayusculas'>Nombre : $nombre $apellido</h2>
      <p>Rut : $row[0]</p>
      <p>Dirección $row[3]</p>
      <p>E-mail : $row[4]</p>
      <p>Cargo : $row[5]</p>
      <p>Sector : $row[6]</p>
      <p>Anexo : $row[7]</p>
      <p>Fecha de ingreso : $row[8]</p>
      <p>Jornadas : $row[9]</p>
      <p>Nivel : $row[10]</p>
      <p>Categoria : $row[11]</p>
      ";       
     } 

?>
										</div>
										
										
										<div class="clearfix"> </div>
										<ul class="pagenation">
											
										</ul>
									</div>
								</div>
								<div class="col-md-3 services-right">
									<h3>Examenes</h3>
											<p>Ingrese para poder ver el portal de examenes de CESFAM</p>
											<a class="more-btn" href="#">Entrar</a>
									
								</div>
                                <br>
								<div class="col-md-3 services-right">
									<h3>Cambiar clave</h3>
											<p>Ingrese para poder cambiar su clave de ingreso</p>
											<a class="more-btn" href="cambiar_clave.php">Entrar</a>
									
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