<?php

if (elgg_is_logged_in())
{
forward ('dashboard');
}
?>
<!DOCTYPE HTML>
<!--
	
-->
<html>
	<head>
		<title>Aula Virtual | Centro Escolar Ana Rita Velez de Moreira</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Aula Virtual para el Centro Escolar Ana Rita Velez de Moreira" />
		<meta name="keywords" content="Aula Virtual, Quelepa, El Salvador, Educacion, PAES Training, PAES 2014" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="mod/vrawa/js/jquery.min.js"></script>
		<script src="mod/vrawa/js/jquery.dropotron.min.js"></script>
		<script src="mod/vrawa/js/jquery.scrollgress.min.js"></script>
		<script src="mod/vrawa/js/skel.min.js"></script>
		<script src="mod/vrawa/js/skel-layers.min.js"></script>
		<script src="mod/vrawa/js/init.js"></script>
		 <link rel="stylesheet" type="text/css" href="mod/vrawa/css/form_style.css" />
			<link rel="stylesheet" href="mod/vrawa/css/skel.css" />
			<link rel="stylesheet" href="mod/vrawa/css/style.css" />
			<link rel="stylesheet" href="mod/vrawa/css/style-wide.css" />
		
		<!--[if lte IE 8]><link rel="stylesheet" href="mod/vrawa/css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="http://www.swsocialweb.com/">Aula Virtual</a> Powered by PiGo LMS</h1>
				<nav id="nav">
					<ul>
						<li><a href="http://sitiosescolares.miportal.edu.sv/12944/">Sitio Web Oficial Institucional</a></li>
						
						<li><a href="forgotpassword/" class="button">Olvidaste tu Contraseña?</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				
				<img src="mod/vrawa/images/logo.png" />
                                
			<section class="main">
				<form class="form-3" action="action/login" method="post">
<?php
$ts = time();
$token = generate_action_token($ts);
?>
				    <p class="clearfix">
				        <label for="login">Usuario</label>
				        <input type="text" name="username" id="login" placeholder="Usuario">
				    </p>
				    <p class="clearfix">
				        <label for="password">Contraseña</label>
				        <input type="password" name="password" id="password" placeholder="Contraseña"> 
				    </p>

<input type="hidden" name="__elgg_token" value="<?php echo $token; ?>"/>
<input type="hidden" name="__elgg_ts" value="<?php echo $ts; ?>" />
    
				    <p class="clearfix">
                                      <center>
				        <input type="submit" name="submit" value="Entrar">
                                          </center>
				    </p>       
				</form>​
			</section>
				
			</section>

		<!-- Main -->
			<section id="main" class="container">
		
				<section class="box special">
					<header class="major">
						<h2>Plataforma Virtual de Aprendizaje y Evaluación</h2>
						<p><img src="mod/vrawa/images/mined_top.jpg" /></p>
					</header>
					<span class="image featured"><img src="mod/vrawa/images/pic01.jpg" alt="" /></span>
				</section>
						
				<section class="box special features">
					<div class="features-row">
						<section>
							<span class="icon major fa-bolt accent2"></span>
							<h3>Moderno</h3>
							<p>Nuestra aula virtual esta a la vanguardia, ya que usa tecnologías web como Twitter Bootstrap y JQuery para hacer el sitio amigable, sólido y compatible con dispositivos móviles</p>
						</section>
						<section>
							<span class="icon major fa-area-chart accent3"></span>
							<h3>Evaluaciones</h3>
							<p>Contamos con módulos de evaluaciones robustos, que nos permiten medir los avances en el aprendizaje de nuestro estudiantes.</p>
						</section>
					</div>
					<div class="features-row">
						<section>
							<span class="icon major fa-cloud accent4"></span>
							<h3>Cloud Learning</h3>
							<p>Esta aula virtual esta en las nubes, lo cual garantiza la integridad de la información, mediante respaldos periódicos para asegurarnos que ninguna tarea o exámen se pierda</p>
						</section>
						<section>
							<span class="icon major fa-lock accent5"></span>
							<h3>Seguridad</h3>
							<p>La información esta resguardada bajo el Walled Garden, que impide que intrusos roben datos de nuestra plataforma.</p>
						</section>
					</div>
				</section>
					
				<div class="row">
					<div class="6u">

						<section class="box special">
							<span class="image featured"><img src="http://sitiosescolares.miportal.edu.sv/12944/blog/article/images/experimento/IMG_5984.JPG" alt="" /></span>
							<h3>Experimentos Escolares</h3>
							<p>Estudiantes del Centro Escolar Ana Rita Vélez de Moreira realizan un experimento de ciencias, con el fin de hacer las clases más interactivas y poner a prueba los conocimientos de ellos... </p>
							<ul class="actions">
								<li><a href="http://sitiosescolares.miportal.edu.sv/12944/blog/article/experimento_de_ciencias_presion_atmosferica.html" class="button alt">Leer Más</a></li>
							</ul>
						</section>
						
					</div>
					<div class="6u">

						<section class="box special">
							<span class="image featured"><img src="http://sitiosescolares.miportal.edu.sv/12944/noticias/posts/images/enciclopedia_pigo/portada_enciclopedia_pigo.png" alt="" /></span>
							<h3>Presentando la Enciclopedia PiGo Standard</h3>
							<p>Integrar la tecnologia en el aprendizaje es sumamente importante, ya que nos permite enseñar de una manera más atractiva conceptos y temas de las diferentes asignaturas...</p>
							<ul class="actions">
								<li><a href="http://sitiosescolares.miportal.edu.sv/12944/noticias/posts/enciclopedia_pigo_ana_rita.html" class="button alt">Leer Más</a></li>
							</ul>
						</section>

					</div>
				</div>

			</section>
			
		<!-- CTA -->
			<section id="cta">
				
				<h2>Dudas sobre como usar nuestra plataforma de aprendizaje en línea?</h2>
				<p>Habla con nuestro Coordinador de Aula Informática!</p>
			      
				
			</section>
			
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					
					<li><a href="https://www.facebook.com/anarita.velez.5" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="https://www.github.com/swsocialweb" class="icon fa-github"><span class="label">Github</span></a></li>
					
				</ul>
				<ul class="copyright">
					<li>&copy; PiGo LMS. All rights reserved.</li><li>Designed by: <a href="http://www.swsocialweb.com">SW Social Web</a></li>
				</ul>
			</footer>

	</body>
</html>