<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo $title; ?></title>
    
    <link href="<?php echo base_url() . '/public/css/blue/style.css' ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() . '/public/img/favicon.png' ?>" rel="icon" type="image/vnd.microsoft.icon"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . '/public/css/bootstrap.min.css'; ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() . '/public/css/font-awesome.min.css'; ?>" type="text/css">
</head>
<body>

<header>
    <nav id="w0" class="navbar navbar-blue navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="w0-collapse" class="collapse navbar-collapse">
                <ul id="w1" class="navbar-nav navbar-brand nav">
                    <img class="img-responsive" src="<?php echo base_url() . '/public/img/logo.png' ?>" width="30px" alt="">
                </ul>
                <ul id="w2" class="navbar-nav navbar-left nav">
                    <li>
                        <a href="/">Blonder413 - Aprendizaje Dinámico</a>
                    </li>
                </ul>
                <ul id="w3" class="navbar-nav navbar-right nav">
                    <li><a href="">Inicio</a></li>
                    <li><a href="portafolio">Portafolio</a></li>
                    <li><a href="acerca">Acerca</a></li>
                    <li><a href="en-vivo">En Vivo</a></li>
                    <li><a href="contacto">Contacto</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">Cursos <b class="caret"></b></a>
                        <ul id="w4" class="dropdown-menu">
                            <li><a href="curso/google" tabindex="-1">Google</a></li>
                            <li><a href="curso/mysql" tabindex="-1">MySQL</a></li>
                            <li><a href="curso/php-5" tabindex="-1">PHP 5</a></li>
                            <li><a href="curso/yiiframework-2" tabindex="-1">YiiFramework 2</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('registro'); ?>">Registro</a></li>
                    <li><a href="<?php echo base_url('ingreso'); ?>">Ingreso</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">Admin <b class="caret"></b></a>
                        <ul id="w4" class="dropdown-menu">
                            <li><a href="<?php echo base_url('article/index'); ?>" tabindex="-1">Article</a></li>
                            <li><a href="<?php echo base_url('category'); ?>" tabindex="-1">Category</a></li>
                            <li><a href="<?php echo base_url('course'); ?>" tabindex="-1">Course</a></li>
                            <li><a href="<?php echo base_url('streaming'); ?>" tabindex="-1">Streaming</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    
<!--
    <section class="jumbotron">
        <div class="container">
            <h1 class="title-blog">
              <img src='/web/img/logo.png' >
              Blonder413
            </h1>
            <p>Aprendizaje dinámico</p>
        </div>
    </section>
-->
    <section class="main container">
      <div class="row">

            <!-- Google Adsense -->
            <div class="col-sm-12 col-md-12">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- bannerresponsive -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-2208995637216263"
                     data-ad-slot="1780166723"
                     data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <br>
            </div>
            <!-- End Google Adsense -->

            

          <!-- Google Search -->
          <div class="col-sm-12">
                <script>
                (function() {
                  var cx = '009014689535229426168:oaz4ieig01w';
                  var gcse = document.createElement('script');
                  gcse.type = 'text/javascript';
                  gcse.async = true;
                  gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                      '//cse.google.com/cse.js?cx=' + cx;
                  var s = document.getElementsByTagName('script')[0];
                  s.parentNode.insertBefore(gcse, s);
                })();
              </script>
              <gcse:search></gcse:search>
            </div>
          <!-- End Google Search -->

          <?php
        //Ip del visitante
//        if ($_SERVER['REMOTE_ADDR']=='::1') $ipuser= ''; else $ipuser= $_SERVER['REMOTE_ADDR'];

//        $geoPlugin_array = unserialize( file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ipuser) );

        //Obtener el continente
    //    echo 'Continente: '.$geoPlugin_array['geoplugin_continentCode'];

        //Obtener el pais
//        $_SESSION['country'] = $geoPlugin_array['geoplugin_countryName'];

//        if ($_SESSION['country'] == 'Venezuela') {
        ?>
<!--          <div class="col-sm-12 col-md-12 text-center btn btn-danger">
            <h2>En estos momentos estamos en mantenimiento, por favor regrese más tarde</h2>
          </div>-->

        <?php
//        } else {
        ?>
            <?php if($content) echo $content; ?>
            <?php if($sidebar) echo $sidebar; ?>
        <?php
//        }
        //Obtener moneda del pais
    //    echo ' Moneda: '.$geoPlugin_array['geoplugin_currencyCode'];
        ?>

      </div>
    </section>

    <footer class="text-center">
        <hr>
        <a rel="license" href="http://creativecommons.org/licenses/by-sa/2.5/co/">
            <img alt="Licencia Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/2.5/co/88x31.png" />
        </a>
        <br>

            <!--
            <a href="http://www.w3.org/html/logo/">
                    <img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-semantics.png" width="165" height="64" alt="HTML5 Powered with CSS3 / Styling, and Semantics" title="HTML5 Powered with CSS3 / Styling, and Semantics">
            </a>
            <br>
            -->

        <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title" class="negrita">Blonder413 - Aprendizaje dinámico</span> por <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.blonder413.com" property="cc:attributionName" rel="cc:attributionURL">Jonathan Morales Salazar</a> <br>se encuentra bajo una Licencia <a rel="license" href="http://creativecommons.org/licenses/by-sa/2.5/co/">Creative Commons Atribución-CompartirIgual 2.5 Colombia</a>.
        <br>2011 - <?php echo date("Y"); ?>
    </footer>

    <!-- jquery -->
    <script src="<?php echo base_url('/public/js/jquery-3.1.1.min.js'); ?>"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="<?php echo base_url('/public/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
