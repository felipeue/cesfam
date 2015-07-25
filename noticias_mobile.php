<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
							<li><a href="index.php">Inicio</a></li>
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
		<!-- Blog -->
		<div class="blog">
			<div class="container">
		<div class="blog-content">
					<div class="wrap">
					<div class="blog-content-left">
						<div class="blog-articals">
							<h1>Eventos</h1>
						<div class="blog-artical">

							
								
						   <?php
							
                           
                            require_once("connect.php");
     						$result = mysql_query("SELECT nombre, foto, descripcion, fecha, posta from evento where publico = 1 order by id desc limit 0, 12");    
     						while ($row = mysql_fetch_row($result))
     						{	 
      						$aux = $row[1];
      						$ruta = "img_mysql/" . $aux;
      						$dia = substr($row[3],0,2);
      						$resto = substr($row[3],-7);    
      						echo"
      						<div class='blog-artical-basicinfo'>
							</div>
							

      						<div class='blog-artical-info'>
								
								<div class='blog-artical-info-img'>
									<img  src='$ruta' title='post-name'>
								</div>
								<div class='blog-artical-info-head'>
									<h2><a href='#'>$row[0]</a></h2>
									<ul>
										<li><span></span> $row[4]</li>
										<li><span></span> $row[3]</li>
										<div class='clearfix'> 
								        </div>
									</ul>
								</div>
								<div class='blog-artical-info-text'>
									<p>$row[2]</p>
								</div>
							</div>
							<div class='clearfix'> </div>
						</div>";
							     }
								?>
						
					<!---start-blog-pagenate---->
				<div class="blog-pagenat">
					<ul>
						
						<div class="clearfix"> </div>
					</ul>
				</div>
				<!---//End-blog-pagenate---->
					</div>

						<!---start-twitter-weight---->

						<!---//End-twitter-weight---->
						<!---- start-tag-weight---->
						<div class="b-tag-weight">
						

						</div>
						<!---- //End-tag-weight---->
					</div>
					<div class="clearfix"> </div>
					<a class="more-btn" href="index.php">Volver a inicio</a>
				</div>
				
				</div>

		</div>

		</div>
		<!-- /Blog -->

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
				<p class="copy-right"><a href="">Desarrollado por</a></p>
			</div>
		</div>
		<!-- /footer -->
	</body>
</html>

