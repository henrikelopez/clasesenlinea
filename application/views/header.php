<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $titulo; ?></title>
        <meta charset="utf-8">
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your keywords">
        <meta name="author" content="Your name">
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
    </head>
    <!--<body id="page1">-->
    <body>
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
                <h1 class="logo"><a href="home.html">Pet clinic</a></h1>
            </div>
            <nav>
                <ul class="sf-menu">
                    <li class="current"><a href="index.html">home</a></li>
                    <li><a href="about.html">nosotros</a></li>
                    <li>
                        <a href="services.html">servicios</a>
                        <ul>
                            <li><a href="#">Maecenas faucibus</a></li>
                            <li><a href="#">Fusce tincidunt</a></li>
                            <li>
                                <a href="#">tempor eros</a>
                                <ul>
                                    <li><a href="#">ut viverra</a></li>
                                    <li><a href="#">hendrerit mauris</a></li>
                                </ul>
                            </li>
                            <li><a href="#">mauris ut du</a></li>
                        </ul>
                    </li>
                    <li><a href="products.html">productos</a></li>
                    <li><a href="contacts.html">contacto</a></li>
                </ul>
                <div class="clear"></div>
            </nav>
            <?php
            if (isset($espectacular) && $espectacular == 'si') {
                ?>
                <div class = "slider-container">
                    <div class = "mp-slider">
                        <div><img src = "images/slide-3.png" alt = ""><a href = "#">read more</a></div>
                        <div><img src = "images/slide-2.png" alt = ""><a href = "#">read more</a></div>
                        <div><img src = "images/slide-1.png" alt = ""><a href = "#">read more</a></div>
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
        <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - August 06, 2011!</div>
            <div class="container_24">
                <div class="grid_24 content-border">
                    <div class="top-content-box">
                        <ul id="mp-pags-cont-extra">
                            <li><a href="#">business strategy</a></li>
                            <li><a href="#">marketing research</a></li>
                            <li><a href="#">financial &amp; banking</a></li>
                        </ul>
                    </div>