<?php

if (!elgg_is_logged_in())
{

?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Pigo | University Theme by SW Social Web</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1">
  <link rel="stylesheet" media="screen" href="mod/university/index_files/style.css">
  <link rel="stylesheet" media="screen" href="mod/university/index_files/reset.css">
  <meta name="viewport" content="width=1024">
  <meta name="csrf" content="kEHeel2IgBpDazigfFSPkXJuaAJQ/PNYewGE8=">
  
</head>
<body class="path3 redline home">
  <header>
    <p class="logo"><a href="#">Pigo</a></p>
    <nav class="main">
      <ul>
        <li class="values"><a href="http://www.swsocialweb.com/">Ayuda</a></li>
        <li class="stories"><a href="http://www.swsocialweb.com/">Contacto</a></li>
        <li class="jobs"><a href="http://www.swsocialweb.com/">Terminos de Uso</a></li>
        <li class="blog"><a href="forgotpassword">Perdiste tu contraseña?</a></li>
        
        
        
      </ul>
    </nav>
    
  </header>
  <div id="content">
    
<div id="signup">
  <form class="overlay" action="action/login" method="post">
        					<?php
$ts = time();
$token = generate_action_token($ts);
?>
    <hgroup>

      <p class="tagline"> <img src="http://sitiosescolares.miportal.edu.sv/12944/EDU%20-%20Educational,%20College%20and%20Courses%20Boostrap%20site%20template_files/logo.png"/>
</p>
    </hgroup>
    
    <div class="field required field-string"><label for="id_name">Username</label>
      <input name="username" id="id_name" placeholder="Escriba su Usuario" type="text"></div>


    <div class="field required field-password">
      <label for="id_password">Password</label><input name="password" id="id_password" placeholder="Escriba su Contraseña" type="password"></div>

    <div class="field buttons">
      <button type="submit">Entrar</button>
      
    </div>
	<input type="hidden" name="__elgg_token" value="<?php echo $token; ?>"/>
<input type="hidden" name="__elgg_ts" value="<?php echo $ts; ?>" />
    <p class="terms more"></p>
    <p style="opacity: 1;" class="learn">
      <a href="#about">Powered by PiGo | Build 0.420.14</a>
    </p>
  </form>
</div>

<div id="about">
  <hgroup class="title">
    <h1>PiGo the best e-learning solution for schools and colleges!</h1>
    <p>PiGo LMS es el software que utilizamos en el aula virtual de nuestro centro educativo
</p>
  </hgroup>
<img src="http://sitiosescolares.miportal.edu.sv/12944/noticias/noticias_files/mined_top.jpg"/>
  <section class="features">
    <article class="innercircle">
      <h2>Privacidad</h2>
      <p>Nadie tiene acceso a tu información. Aprende en un ambiente seguro</p>
    </article>
    <article class="messaging">
      <h2>Mensajeria</h2>
      <p>Habla con tus profesores y compañeros, discute sobre tareas y proyectos rápidamente</p>
    </article>
    <article class="post">
      <h2>Estudia donde sea!</h2>
      <p>Puedes enviar tus tareas, realizar exámenes desde tu computadora, teléfono o tablet.</p>
    </article>
  </section>

  <section class="download">


  </section>
<img src="http://sitiosescolares.miportal.edu.sv/12944/noticias/noticias_files/plan.jpg" />
</div>

    <footer class="main">
      <nav class="sitemap">
        <ul>
          <li><span>Pigo © 2014</span></li>
          <li><a href="http://www.swsocialweb.com/">Support</a></li>
          <li><a href="http://www.swsocialweb.com/">Sales</a></li>
          <li><a href="http://www.swsocialweb.com/">Help</a></li>
          <li><a href="http://www.swsocialweb.com/">SW Social Web</a></li>
          <li><a href="http://www.swsocialweb.com/">PiGo News</a></li>
         
        </ul>
      </nav>
    </footer>
  </div>
  
  


</body></html>
<?php


 
}
else
   forward('dashboard');
?>