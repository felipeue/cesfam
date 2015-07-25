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
							<li ><a href="intranet_mobile.php">Inicio</a></li>
							<li class="active"><a href="documentos_mobile.php">Documentos</a></li>
							<li><a href="eventos_mobile.php">Eventos</a></li>
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
									<h1>Examenes</h1>
									<div class="services-left-grids">
											<?php

											require_once("connect.php");
											$result = mysql_query("SELECT DISTINCT ano from documento where tipo = 'informativos' order by ano DESC");
										    while ($row = mysql_fetch_row($result))
										    {   
										    	echo "<div class='col-md-6 services-left-grid container'>";
                                                echo "<h2>$row[0]</h2>";
                                                $ano= $row[0];
											    $result2 = mysql_query("SELECT nombre, ano, descripcion, documento from documento where tipo = 'informativos' and ano=$ano");
										        while ($row = mysql_fetch_row($result2))
										        {
										        echo "<label>$row[0] | <a href='documentos/$row[3]'>$row[3]</a><br></label><br>";
										        echo"<sub>$row[2]</sub>";   
										        }
										        echo "</div>";
										    }
											?>
											<a class="caption-btn" href="documentos.php">Volver</a>
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