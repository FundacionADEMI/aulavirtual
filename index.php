<!DOCTYPE HTML>
<!--
   Big Picture by HTML5 UP
   html5up.net | @ajlkn
   Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
   asdasd-->

<html>
   <head>
      <title>Aula virtual - ADEMI</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
      <link rel="stylesheet" href="assets/css/main.css" />
      <!--[if lte IE 8]>
      <link rel="stylesheet" href="assets/css/ie8.css" />
      <![endif]-->
      <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ie9.css" />
      <![endif]-->
   </head>
   <body>
      <!-- Header -->
      <header id="header">
         <h1><img src="images/logo.png" style="height: 55px;"></h1>
         <nav>
            <ul>
               <li><a href="https://ademi.org.ar/category/noticias/">Noticias</a></li>
               <li><a href="https://ademi.org.ar/areas-de-trabajo/">Áreas de Trabajo</a>
               <li><a href="https://ademi.org.ar/category/programas/">Programas</a>
               <li><a href="https://ademi.org.ar/calendar/">Calendario</a></li>
               <li><button class="btn-block btn btn-primary" type="submit" onclick="window.location.href='#work'" id="formLogin_submitAuth">EMPEZA A APRENDER</button></li>
            </ul>
         </nav>
      </header>
      <!-- Intro -->
      <section id="intro" class="main style1 dark fullscreen">
         <div class="content">
            <header>
               <h2>Bienvenido</h2>
            </header>
            <footer>
             
             
               <a href="#five" class="button" style="background-color: #ba6a7c;">SOY EMPRENDEDOR</a>
               <a href="#four" class="button" style="background-color:#5681a2">SOY PROFESIONAL</a>
               <a href="#three" class="button" style="background-color:#d5ad60">SOY EMPRESARIO</a>
             
            </footer>
         </div>
         <a href="#one" class="button style2 down anchored">More</a>
      </section>
      <!-- One -->
      <section id="one" class="main style2 right dark fullscreen">
          <a href="#intro" class="button style2 down anchored">Next</a>
         <div class="content box style2">
            <header>
               <h2>¿Qué es el Aula Virtual ADEMI? </h2>
            </header>
            <p>El Aula Virtual ADEMI es una propuesta impulsada desde la Agencia para el Desarrollo Económico de Misiones (ADEMI) que busca facilitar el acceso a entrenamientos para emprendedores y profesionales.</p>
         </div>
         <a href="#two" class="button style2 down anchored">Next</a>
      </section>
      <!-- Two -->
      <section id="two" class="main style2 left dark fullscreen">

         <div class="content box style2">
            <header>
               <h2>¿Qué rol tiene la ADEMI?</h2>
            </header>
            <p>Por medio de esta herramienta, ADEMI facilita el acceso a entrenamientos para emprendedores y profesionales. Podes ingresar desde cualquier lugar, a cualquier hora y desde cualquier dispositivo.</p>
         </div>
         <a href="#five" class="button style2 down anchored">Next</a>
      </section>
      <!-- three -->
      <section id="five" class="main style2 right dark fullscreen">
         <div class="content box style2">
            <header>
               <h2>Emprendedor</h2>
            </header>
            <p>Emprendedor es aquella persona que transforma una idea en acción y comienza a formar su negocio. Seguirá siéndolo hasta el momento que termine de transitar los pasos necesarios para formarse como una empresa constituida.</p>
    
                  <button class="btn-block btn btn-primary" type="submit" onclick="window.location.href='test.php'" id="formLogin_submitAuth">HACER EL TEST</button>
      
            
           
         </div>

         <a href="#four" class="button style2 down anchored">Next</a>
      </section>
      <!-- four -->
      <section id="four" class="main style2 left dark fullscreen">
         <div class="content box style2">
            <header>
               <h2>Profesional</h2>
            </header>
            <p>La ADEMI ha conformado un equipo de profesionales con experiencia en el entrenamiento de operarios, profesionales, directivos y colaboradores en instituciones públicas o privadas.</p>
            <button class="btn-block btn btn-primary" type="submit" onclick="window.location.href='http://registro.ademi.org.ar/'" id="formLogin_submitAuth">Entrar</button>
         </div>
         <a href="#three" class="button style2 down anchored">Next</a>
      </section>
      <!-- Tree -->
      <section id="three" class="main style2 right dark fullscreen">
         <div class="content box style2">
            <header>
               <h2>Empresa</h2>
            </header>
            <p>ADEMI ofrece programas y asistencia técnica para acompañar procesos y generar soluciones reales.
Para consultar por nuestros servicios a empresas ingresa, completa el formulario y nos contactaremos a la brevedad.</p>
<button class="btn-block btn btn-primary" type="submit" onclick="window.location.href='https://docs.google.com/forms/d/e/1FAIpQLSdSFF_fvOZvefARC1ZbGW1109faM8DQaBPibTde3wUYqvf8EA/viewform?c=0&w=1'" id="formLogin_submitAuth">Entrar</button>
         
         </div>
         <a href="#work" class="button style2 down anchored">Next</a>
      </section>
      <section id="work" class="main style3 primary">
         <div class="content">
            <header>
               <h3>Iniciar Sesion</h3>

<form class="form-horizontal" action="https://aulavirtual.emprendermisiones.com/index.php" method="post" name="formLogin" id="formLogin">
        <fieldset>
            
                        <label for="login">Nombre de usuario</label>
                        <div class="input-group">
                            
                            <div class="input-group-addon">
           
                </div>
                            <input id="login" autofocus="autofocus" placeholder="Nombre de usuario" autocapitalize="none" class="form-control" name="login" type="text">
                        </div>

                        <br>
                        <label for="password">Contraseña</label>
                        <div class="input-group">
                            
                            <div class="input-group-addon">
              
                </div>
                            <input id="password" placeholder="Contraseña" autocapitalize="none" class="form-control" name="password" type="password">
                        </div>
                        
                <button class="btn-block btn btn-primary " name="submitAuth" type="submit" id="formLogin_submitAuth">Entrar</button>
                  <div class="form-group">
      
        </fieldset>
        <input name="_qf__formLogin" type="hidden" value="" id="formLogin__qf__formLogin">


 <a href="http://aulavirtual.emprendermisiones.com/main/auth/inscription.php">Quiero Registrarme</a>
        </form>






               <p>Por medio de esta herramienta, ADEMI facilita el acceso a entrenamientos para emprendedores y profesionales. Podes ingresar desde cualquier lugar, a cualquier hora y desde cualquier dispositivo.</p>
            </header>
            <!-- Gallery  
               <div class="gallery">
               	<article class="from-left">
               		<a href="images/fulls/01.jpg" class="image fit"><img src="images/thumbs/01.jpg" title="The Anonymous Red" alt="" /></a>
               	</article>
               	<article class="from-right">
               		<a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/02.jpg" title="Airchitecture II" alt="" /></a>
               	</article>
               	
               </div>
               -->
         </div>
      </section>
      <!-- Contact 
         <section id="contact" class="main style3 secondary">
         	<div class="content">
         		<header>
         			<h2>Say Hello.</h2>
         			<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.</p>
         		</header>
         		
         	</div>
         </section>
         
         <!-- Footer -->
      <footer id="footer">
         <!-- Icons -->
         <ul class="actions">
            <li><a href="https://twitter.com/AgenciaADEMI" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="https://www.facebook.com/fundacion.ademi/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="https://www.youtube.com/channel/UCeHjdmIRUu4CoqF5a8EObQA" class="icon fa-youtube"><span class="label">YouTube</span></a></li>
         </ul>
         <!-- Menu -->
         <ul class="menu">
            <li> <a href="http://html5up.net">&copy; 2017 Agencia Para El Desarrollo Económico de Misiones</a></li>
         </ul>
      </footer>
      <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.poptrox.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>
   </body>
</html>