<?php
$principiante =0;
$intermedio=0;
$avanzado=0;
if(isset($_POST['contact'])){

        if ($_POST['contact']=="principiante") {
            $texto='<h2 style="color: #fff112;" >Te recomendamos iniciar los cursos de color amarillo.</h2>';
        }

        if ($_POST['contact']=="intermedio") {
           $texto='<h2 style="color: #0695d6;" >Te recomendamos iniciar los cursos de color celeste.</h2>';
        }

        if ($_POST['contact']=="avanzado") {
           $texto='<h2 style="color: #b40f0f;" >Te recomendamos iniciar los cursos de color rojo.</h2>';
        }

    }

// principiante > amarillo
// intermedio > celeste
// avanzado > tojo
  ?>
  <!DOCTYPE HTML>
<!--
    Big Picture by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Aula virtual - ADEMI</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
    <body>
            <header id="header">
                <h1>Aula Virtual - ADEMI</h1>
                <nav>
                    <ul>
                        <li><a href="http://ademi.org.ar/category/noticias/">Noticias</a></li>
                        <li><a href="http://ademi.org.ar/areas-de-trabajo/">Áreas de Trabajo</a>
                        <li><a href="http://ademi.org.ar/category/programas/">Programas</a>
                        <li><a href="http://ademi.org.ar/calendar/">Calendario</a></li>
                    </ul>
                </nav>
            </header>
            <section id="work" class="main style3 primary">
                <div class="content">
                    <header>
                        <?php echo $texto ?>
                        <p>Ingreza al aula virtual de ademi desde <a href="http://aulavirtual.emprendermisiones.com/">aca</a></p>
                        <p>La ADEMI con su Aula Virtual busca facilitar el acceso a capacitaciones y entrenamientos para emprendedores y profesiones. Esto denota una preocupación por ser ese espacio preparado para responder a consultas amplias y diversas, como se ven en la realidad.</p>
                    </header>
                </div>
            </section>
            <footer id="footer">
                    <ul class="actions">
                        <li><a href="https://twitter.com/AgenciaADEMI" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="https://www.facebook.com/fundacion.ademi/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="https://www.youtube.com/channel/UCeHjdmIRUu4CoqF5a8EObQA" class="icon fa-youtube"><span class="label">YouTube</span></a></li>
                    </ul>
                    <ul class="menu">
                        <li> <a href="http://html5up.net">&copy; 2017 Agencia Para El Desarrollo Económico de Misiones</a></li>
                    </ul>
            </footer>
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.poptrox.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
    </body>
</html>