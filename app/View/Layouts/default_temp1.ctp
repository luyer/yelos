<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>YELOS</title>
    <meta name="description" content="">
    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href='//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300' rel='stylesheet' id="googlefont">
    
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/prettyPhoto.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/revslider.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    
    <!-- Favicon and Apple Icons -->
    <link rel="icon" type="image/png" href="/images/icons/icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/icons/apple-icon-72x72.png">
    
    <!--- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')</script>

    <!--[if lt IE 9]>
        <script src="/js/html5shiv.js"></script>
        <script src="/js/respond.min.js"></script>
    <![endif]-->
    
    <style id="custom-style">
    
    </style>
</head>
<body>
	<div id="wrapper">
		<header id="header" class="header2">
		<!--<div id="header-top">
		    <div class="container">
			<div class="row">
			    <div class="col-md-12">
				
				<div class="header-top-right">
				    <div class="header-text-container pull-right">
					<p class="header-text">Bienvenido a Yelos</p>
					<p class="header-link"><a href="#">Login</a></p>
				    </div><!-- End .pull-right -->
				<!--<</div><!-- End .header-top-right -->
			    <!--<</div><!-- End .col-md-12 -->
			<!--<</div><!-- End .row -->
		    <!--</div><!-- End .container -->
		<!--<</div><!-- End #header-top -->
            
            <div id="inner-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 logo-container">
                            <h1 class="logo clearfix">
                                <span>Yelos</span>
                                <a href="/" title=""><img src="/img/logo.png" alt=""  height="67"></a>
                            </h1>
                        </div><!-- End .col-md-5 -->
                        <div class="col-md-7 col-sm-7 col-xs-12 header-inner-right">
                                <div id="quick-access">
                                    <form class="form-inline quick-search-form" role="form" action="/productos/search" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Búsqueda" name="data[texto]">
                                        </div><!-- End .form-inline -->
                                        <button type="submit" id="quick-search" class="btn btn-custom"></button>
                                    </form>
                                </div><!-- End #quick-access -->
                          
                                
                        </div><!-- End .col-md-7 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
                
                <div id="main-nav-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 clearfix">
                                
                                <nav id="main-nav">
                                    <div id="responsive-nav">
                                        <div id="responsive-nav-button">
                                            Menu <span id="responsive-nav-button-icon"></span>
                                        </div><!-- responsive-nav-button -->
                                    </div>
                                    <ul class="menu clearfix">
                                        <li>
                                            <a class="active" href="/">Inicio</a>
                                        </li>
                                        <li class="mega-menu-container"><a href="/categorias">Catálogo</a>
                                            <!--<div class="mega-menu clearfix">
                                                    <div class="col-5">
                                                        <a href="category.html" class="mega-menu-title">Categoria</a><!-- End .mega-menu-title -->
                                                       <!-- <ul class="mega-menu-list clearfix">
                                                            <li><a href="#">Subcateria1</a></li>
                                                            <li><a href="#">Subcateria2</a></li>
                                                            <li><a href="#">Subcateria3</a></li>
                                                            <li><a href="#">Subcateria4</a></li>
                                                            <li><a href="#">Subcateria5</a></li>
                                                        </ul>
                                                    </div><!-- End .col-5 -->
                                            <!--</div><!-- End .mega-menu --><!---->
                                        </li>
					<li><a href="#">Serigrafía</a></li>
					<li><a href="#">Gran Formato</a></li>
					<li><a href="#">Flexografía</a></li>
					<li><a href="#">Imprenta</a></li>
					<li><a href="#">Textil</a></li>
                                        <li><a href="/sitios/contacto">Contacto</a></li>
                                    </ul>
                                    
                                </nav>
                                
                                
                            </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
                    
                </div><!-- End #nav -->
            </div><!-- End #inner-header -->
        </header><!-- End #header -->
		<?php echo $this->fetch('content'); ?>
		<footer id="footer">
		    <div id="inner-footer">
			<div class="container">
			    <div class="row">
				<div class="col-md-3 col-sm-4 col-xs-12 widget">
				    <h3>Empresa</h3>
				    <ul class="links">
					<li><a href="/">Inicio</a></li>
					<li><a href="#">Quienes Somos</a></li>
					<li><a href="/categorias">Catálogo</a></li>
					<li><a href="/contacto">Contacto</a></li>
				    </ul>
				</div><!-- End .widget -->
				
				<div class="col-md-3 col-sm-4 col-xs-12 widget">
				    <h3>Servicios</h3>
				    <ul class="links">
					<li><a href="#">Sefigrafía</a></li>
					<li><a href="#">Gran Formato</a></li>
					<li><a href="#">Flexografía</a></li>
					<li><a href="#">Imprenta</a></li>
					<li><a href="#">Textil</a></li>
				    </ul>
				</div><!-- End .widget -->
				
				<div class="col-md-3 col-sm-4 col-xs-12 widget">
				    <h3>Mi cuenta</h3>
				    <ul class="links">
					<li><a href="#">Inicia sesión</a></li>
				    </ul>
				    <!-- <div class="twitter_feed_widget"></div><!-- End .twitter_feed_widget -->
				</div><!-- End .widget -->
				
				<div class="clearfix visible-sm"></div>
				
				<div class="col-md-3 col-sm-12 col-xs-12 widget">
				    <h3>FACEBOOK</h3>
				    
				    <div class="facebook-likebox">
					
				    </div> 
				</div><!-- End .widget -->
			    </div><!-- End .row -->
			</div><!-- End .container -->
		    </div><!-- End #inner-footer -->
		    
		    <div id="footer-bottom">
			<div class="container">
			    <div class="row">
				<div class="col-md-7 col-sm-7 col-xs-12 footer-social-links-container">
				    <ul class="social-links clearfix">
					<li><a href="#" class="social-icon icon-facebook"></a></li>
					<li><a href="#" class="social-icon icon-twitter"></a></li>
					<li><a href="#" class="social-icon icon-linkedin"></a></li>
				    </ul>
				</div><!-- End .col-md-7 -->
				
				<div class="col-md-5 col-sm-5 col-xs-12 footer-text-container">
				    <p>&copy; 2014 YELOS. Todos los Derechos Reservados.</p>
				</div><!-- End .col-md-5 -->
			    </div><!-- End .row -->
			</div><!-- End .container -->
		    </div><!-- End #footer-bottom -->
		    
		</footer><!-- End #footer -->
		<a href="#" id="scroll-top" title="Scroll to Top"><i class="fa fa-angle-up"></i></a><!-- End #scroll-top -->
		<?php echo $this->element('sql_dump'); ?>
	</div>
	<!-- END -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/smoothscroll.js"></script>
    <script src="/js/jquery.debouncedresize.js"></script>
    <script src="/js/retina.min.js"></script>
    <script src="/js/jquery.placeholder.js"></script>
    <script src="/js/jquery.hoverIntent.min.js"></script>
    <script src="/js/twitter/jquery.tweet.min.js"></script>
    <script src="/js/jquery.flexslider-min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jflickrfeed.min.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/jquery.themepunch.tools.min.js"></script>
    <script src="/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/js/main.js"></script>
	
    <script>
    	$(function() {

            // Slider Revolution
            jQuery('#slider-rev').revolution({
                delay:5000,
                startwidth:1170,
                startheight:600,
                onHoverStop:"true",
                hideThumbs:250,
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,
                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:0,
                soloArrowLeftVOffset:0,
                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:0,
                soloArrowRightVOffset:0,
                touchenabled:"on",
                stopAtSlide:-1,
                stopAfterLoops:-1,
                dottedOverlay:"none",
                fullWidth:"on",
                spinned:"spinner2",
                shadow:0,
                hideTimerBar: "on",
                // navigationStyle:"preview3"
              });
        
        });
    </script>
   
</body>
</html>
