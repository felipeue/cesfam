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
			<div class="header">
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
							<li class="active"><a href="index.php">Inicio</a></li>
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
		<!-- banner -->
		<div class="benner">
				<!-- slider -->
				<!--- img-slider --->
				<div class="img-slider">
						<!----start-slider-script---->
					<script src="web/js/responsiveslides.min.js"></script>
					 <script>
					    // You can also use "$(window).load(function() {"
					    $(function () {
					      // Slideshow 4
					      $("#slider4").responsiveSlides({
					        auto: true,
					        pager: true,
					        nav: true,
					        speed: 500,
					        namespace: "callbacks",
					        before: function () {
					          $('.events').append("<li>before event fired.</li>");
					        },
					        after: function () {
					          $('.events').append("<li>after event fired.</li>");
					        }
					      });
					
					    });
					  </script>
					<!----//End-slider-script---->
					<!-- Slideshow 4 -->
					    <div  id="top" class="callbacks_container">
					      <ul class="rslides" id="slider4">
					        <li>
					          <img class="img-responsive" src="web/images/slide1.jpg" alt="">
					          <div class="slider-caption">
					          	<h1>CESFAM<span style="color : #00B6F8">IDM</span></h1>
					         	 <p>Centro de salud familiar de Isla de maipo, siempre al servicio de salud y el bienestar familiar de nuestra comuna.</p>
					         	 <a class="caption-btn" href="#">Leer mas</a>
					          </div>
					        </li>
					        <li>
					          <img src="web/images/slide2.jpg" alt="">
					           <div class="slider-caption">
					          	<h1>CESFAM<span style="color : #00B6F8">IDM</span></h1>
					          	<p>Centro de salud familiar de Isla de maipo, siempre al servicio de salud y el bienestar familiar de nuestra comuna. </p>
					            <a class="caption-btn" href="#">Leer mas</a>
					          </div>
					        </li>
					        <li>
					          <img src="web/images/slide3.jpg" alt="">
					           <div class="slider-caption">
					           	<h1>CESFAM<span style="color : #00B6F8">IDM</span></h1>
					           <p>Centro de salud familiar de Isla de maipo, siempre al servicio de salud y el bienestar familiar de nuestra comuna. </p>
					           <a class="caption-btn" href="#">Leer mas</a>
					          </div>
					        </li>
					      </ul>
					    </div>
					    <div class="clearfix"> </div>
					</div>
						<!-- slider -->
					</div>
		<!-- /banner -->
		<!-- top-grids -->
		<div class="top-grids text-center">
			<div class="container">
				<div class="col-md-3">
					<div class="top-grid">
						<span class="t-icon1"> </span>
						<h3>Salud</h3>
						 <p>Un equipo preparado y multidisiplinario
						 	para poder abarcar la mayor parte de la demanda en cuanto a salud de nuestra comuna.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="top-grid">
						<span class="t-icon2"> </span>
						<h3>Examenes</h3>
						 <p>Tecnologia disponible para poder realizar una toma de examenes eficiente para todos nuestros pacientes.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="top-grid">
						<span class="t-icon3"> </span>
						<h3>Farmacologia</h3>
						 <p>Gran variedad y stock de farmacos a la disposicion de la comunidad dentro del mismo centro para otorgar un servico eficaz y rapido.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="top-grid">
						<span class="t-icon4"> </span>
						<h3>Transporte</h3>
						 <p>Nuestros moviles estan alerta en caso de cualquier emergencia para una derivación a otros centros, ademas de transporte a las distintas postas rurales .</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
		</div>
		<!-- top-grids -->
		<!-- mid-grids -->

		<!-- mid-grids -->
		<!-- bottom-grids -->
		<div class="bottom-grids">
				<h2>Noticias</h2>
				<?php
				require_once("connect.php");
				$result = mysql_query("SELECT nombre, foto, descripcion, fecha from evento where publico = 1 order by id desc limit 0, 1");
				while ($row = mysql_fetch_row($result))
				{
					$aux = $row[1];
					$ruta = "img_mysql/" . $aux;
			        echo "<div class='bottom-grid bottom-grid1'>
					<div class='container'>
					<div class='col-md-3 bottom-grid-left'>
					<a href='noticias_mobile.php''><img src='$ruta' title='name' /></a>
					</div>
					<div class='col-md-9 bottom-grid-right'>
					<h3 style='color : white'>$row[0]</h3>
					<p>$row[3]</p>
					<a class='news-btn' href='noticias_mobile.php''>Leer mas</a>
					</div>
					<div class='clearfix'> </div>
					</div>
				</div>";
			     }
			    ?>
			    <?php
			    require_once("connect.php");
				$result = mysql_query("SELECT nombre, foto, descripcion, fecha from evento where publico = 1 order by id desc limit 1, 1");
				while ($row = mysql_fetch_row($result))
				{
				$aux = $row[1];
				$ruta = "img_mysql/" . $aux;
				echo "<div class='bottom-grid bottom-grid2'>
					<div class='container'>
					<div class='col-md-3 bottom-grid-left'>
						<a href='noticias_mobile.php'><img src='$ruta' title='name' /></a>
				</div>
					<div class='col-md-9 bottom-grid-right'>
					<h3 style='color : white'>$row[0]</h3>
						<p>$row[3]</p>
						<a class='news-btn' href='noticias_mobile.php'>Leer mas</a>
					</div>
					<div class='clearfix'> </div>
					</div>
				</div>";
					}	
                 ?>
                <?php
			    require_once("connect.php");
				$result = mysql_query("SELECT nombre, foto, descripcion, fecha from evento where publico = 1 order by id desc limit 2, 1");
				while ($row = mysql_fetch_row($result))
				{
				$aux = $row[1];
				$ruta = "img_mysql/" . $aux;
				echo "<div class='bottom-grid bottom-grid3'>
					<div class='container'>
					<div class='col-md-3 bottom-grid-left'>
						<a href='noticias_mobile.php'><img src='$ruta' title='name' /></a>
					</div>
					<div class='col-md-9 bottom-grid-right'>
						<h3 style='color : white'>$row[0]</h3>
						<p>$row[3]</p>
						<a class='news-btn' href='noticias_mobile.php'>Leer mas</a>
					</div>
					<div class='clearfix'> </div>
					</div>
				</div>";
               }
				?>
				<div class="clearfix"> </div>
				<a class="load-news" href="noticias_mobile.php">Mas noticias</a>
			</div>
		</div>
		
		<!-- bottom-grids -->
		<!-- team -->
		<div class="team">
						<div class="container">
							<div class="team-head text-center">
								<h3>Postas</h3>
							</div>
							<!-- team-grids -->
						<div class="team-grids">
								<div class="col-md-4">
									<div class="team-grid">
										<div class="team-people">
											<div class="team-people-pic">
												<img src="http://2.bp.blogspot.com/-ZDiazkH4f4k/U5G6srWA9kI/AAAAAAAAAew/RkuVOt23pRo/s1600/IMG_0245.JPG" title="name">
											</div>
											<div class="team-people-info">
												<h3>La Islita</h3>
												
											</div>
										</div>
									</div>
								</div>
							    <div class="col-md-4">
									<div class="team-grid">
										<div class="team-people">
											<div class="team-people-pic">
												<img src="http://2.bp.blogspot.com/-rFhm3IH6LVk/U5G_0dd_S-I/AAAAAAAAAfI/KM9yHao9gQw/s1600/IMG_0004.JPG" title="name">
											</div>
											<div class="team-people-info">
												<h3>Gacitúa</h3>
												<p></p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="team-grid">
										<div class="team-people">
											<div class="team-people-pic">
												<img src="http://1.bp.blogspot.com/-FbHqsfBs1mA/U5ICPHO9pMI/AAAAAAAAAfk/SP9Sc4vxm4o/s1600/IMG_0272.JPG" title="name">
											</div>
											<div class="team-people-info">
												<h3>Las mercedes </h3>
												
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="team-grid">
										<div class="team-people">
											<div class="team-people-pic">
												<img src="http://1.bp.blogspot.com/-wyC_e-82ROo/U5HAm7cVdjI/AAAAAAAAAfQ/BWjqFGz6SQ8/s1600/IMG_0135.JPG" title="name">
											</div>
											<div class="team-people-info">
												<h3>San Antonio</h3>
												
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
		<!-- team -->
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
				<br>
			<div class="team-grids-caption-right">
                <p class="copy-right"><a href="admin_mobile.php">Administrador</a></p>
			</div>
			</div>
		</div>
		<!-- /footer -->
	</body>
</html>