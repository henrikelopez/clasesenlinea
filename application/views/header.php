<!DOCTYPE html>
<html lang="es">
    <head>
        <title><?php echo $titulo; ?></title>
        <meta charset="utf-8">
        <meta name="description" content="Clases en Línea, es un recurso gratuito para organizaciones educativas o docentes de cualquier nivel académico que deseen gestionar actividades educativas en línea con sus alumnos.">
        <meta name="keywords" content="clases, academia, educación, maestro, maestra, escuela, cursos">
        <meta name="author" content="Clases en Línea">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/superfish.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.cycle.all.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('.mp-slider').cycle({
                    pager: '#mp-pags',
                    timeout: 7000,
                    pagerAnchorBuilder: pagerFactory
                });
                function pagerFactory(index, slide) {
                    var titles = []
                    titles[0] = $("#mp-pags-cont li:eq(0)").text()
                    titles[1] = $("#mp-pags-cont li:eq(1)").text()
                    titles[2] = $("#mp-pags-cont li:eq(2)").text()
                    return '<li><a href="#">' + (titles[index]) + '</a></li>';
                }
                ;
            })
        </script>
        <!--[if lt IE 8]>
           <div style=' clear: both; text-align:center; position: relative;'>
             <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
               <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
          </div>
        <![endif]-->
        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
                <link rel="stylesheet" href="css/ie.css"> 
        <![endif]-->
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-38926834-1']);
            _gaq.push(['_setDomainName', 'clasesenlinea.mx']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>
    </head>
    <!--<body id="page1">-->
    <body>
    <div style="float:left; position:fixed; background-color:#CCC; width:120px; height:600px; top:15%; z-index:9800 !important;">
        <script type="text/javascript"><!--

google_ad_client = "ca-pub-5830654382485300";

/* Flotador en página */

google_ad_slot = "5619056074";

google_ad_width = 120;

google_ad_height = 600;

//-->

</script>

<script type="text/javascript"

src="http://pagead2.googlesyndication.com/pagead/show_ads.js">

</script>
</div>

        <!-- Header -->
        <header>
           <script type="text/javascript"><!--
google_ad_client = "ca-pub-7196619288526425";
/* Clases en linea alargado index */
google_ad_slot = "3720467572";
google_ad_width = 970;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
            <div class="inner">
                <h1 class="logo"><a href="inicio">Clases en Línea</a></h1>
            </div>
            <nav>
                <ul class="sf-menu">
                    <li class="<?php echo ((isset($menu)) && $menu == 'inicio') ? 'current' : ''; ?>"><a href="inicio">inicio</a></li>
                    <li class="<?php echo ((isset($menu)) && $menu == 'nosotros') ? 'current' : ''; ?>"><a href="nosotros">nosotros</a></li>
                    <li class="<?php echo ((isset($menu)) && $menu == 'servicios') ? 'current' : ''; ?>">
                        <a href="servicios">servicios</a>
                        <ul>
                            <li><a href="#">Para docentes</a></li>
                            <li><a href="#">Para instituciones</a></li>
                            <li><a href="#">¿Quienes estan dentro?</a></li>
                            <li>
                                <a href="#">Otros...</a>
                                <ul>
                                    <li><a href="#">Material didactico</a></li>
                                    <li><a href="#">Directorio</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php echo ((isset($menu)) && $menu == 'contacto') ? 'current' : ''; ?>"><a href="contacto">contacto</a></li>
                </ul>
                <div class="clear"></div>
            </nav>
            <?php
            if (isset($espectacular) && $espectacular == 'si') {
                ?>
                <div class = "slider-container">
                    <div class = "mp-slider">
                        <div><img src = "images/slide-3.png" alt = ""><a href = "#">ver mas</a></div>
                        <div><img src = "images/slide-2.png" alt = ""><a href = "#">ver mas</a></div>
                        <div><img src = "images/slide-1.png" alt = ""><a href = "#">ver mas</a></div>
                    </div>
                </div>
                <?php
            } else {
                ?>

                <?php
            }
            ?>
        </header>
        <!-- Content -->
        <section id="content"><div class="ic">Clases en Línea, el recurso gratuito para la educación.</div>
            <div class="container_24">
                <div class="grid_24 content-border">
                    <div class="top-content-box">
                        <ul id="mp-pags-cont-extra">
                            <li><a href="#">¿Maestro?</a></li>
                            <li><a href="#">¿Institución?</a></li>
                            <li><a href="#">¿Alumno?</a></li>
                        </ul>
                    </div>