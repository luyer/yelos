<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Yelos</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/colors/green.css" id="colors">
 
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body class="boxed">
<div id="wrapper">


<!-- Top Bar
================================================== -->
<div id="top-bar">
	<div class="container">

		<!-- Top Bar Menu -->
		<div class="ten columns">
			<ul class="top-bar-menu">
				<li><i class="fa fa-phone"></i> (81) 8400 2440 - 43</li>
				<li><i class="fa fa-envelope"></i> <a href="#">servicioalcliente@yelos.com.mx</a></li>
				<!--<li>
					<div class="top-bar-dropdown">
						<span>English</span>
						<ul class="options">
							<li><div class="arrow"></div></li>
							<li><a href="#">English</a></li>
							<li><a href="#">Polish</a></li>
							<li><a href="#">Deutsch</a></li>
						</ul>
					</div>
				</li>
				<li>
					<div class="top-bar-dropdown">
						<span>USD</span>
						<ul class="options">
							<li><div class="arrow"></div></li>
							<li><a href="#">USD</a></li>
							<li><a href="#">PLN</a></li>
							<li><a href="#">EUR</a></li>
						</ul>
					</div>
				</li>-->
			</ul>
		</div>
		<!-- Social Icons -->
		<div class="six columns">
			<ul class="social-icons">
				<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
				<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="clearfix"></div>

<!-- Header
================================================== -->
<div class="container">


	<!-- Logo -->
	<div class="four columns">
		<div id="logo">
			<h1><a href="index.html"><img src="/img/logo.png" alt="Yelos" /></a></h1>
		</div>
	</div>


	<!-- Additional Menu -->
	<div class="twelve columns">
		<div id="additional-menu">
			<!--<ul>
				<li><a href="shopping-cart.html">Shopping Cart</a></li>
				<li><a href="wishlist.html">WishList <span>(2)</span></a></li>
				<li><a href="checkout-billing-details.html">Checkout</a></li>
				<li><a href="my-account.html">My Account</a></li>
			</ul>-->
		</div>
	</div>


	<!-- Shopping Cart -->
	<div class="twelve columns">
		<!-- Search -->
		<nav class="top-search">
			<form action="/productos/search" method="post">
				<button><i class="fa fa-search"></i></button>
				<input class="search-field" type="text" placeholder="Búsqueda" name="data[texto]" value=""/>
			</form>
		</nav>
	</div>

</div>


<!-- Navigation
================================================== -->
<div class="container">
	<div class="sixteen columns">
		
		<a href="#menu" class="menu-trigger"><i class="fa fa-bars"></i> Menu</a>

		<nav id="navigation">
			<ul class="menu" id="responsive">

				<li><a href="/" class="current homepage" id="current">Inicio</a></li>

				<li>
					<a href="/categorias">Catálogo</a>
					
				</li>
				<li>
					<a href="#">Serigrafía</a>
				</li>
				<li>
					<a href="#">Gran Formato</a>
				</li>
				<li>
					<a href="#">Flexografía</a>
				</li>
				<li>
					<a href="#">Imprenta</a>
				</li>
				<li>
					<a href="#">Textil</a>
				</li>
				<li>
					<a href="/sitios/contacto">Contacto</a>
				</li>
			</ul>
		</nav>
	</div>
</div>

<?php #echo $this->Session->flash(); ?>

<?php echo $this->fetch('content'); ?>


<div class="margin-top-50"></div>

<!-- Footer
================================================== -->
<div id="footer">

	<!-- Container -->
	<div class="container">

		<div class="four columns">
			<!--<img src="images/logo-footer.png" alt="" class="margin-top-10"/>-->
			<p class="margin-top-15">Nulla facilisis feugiat magna, ut molestie metus hendrerit vitae. Vivamus tristique lectus at varius rutrum. Integer lobortis mauris non consectetur eleifend.</p>
		</div>

		<div class="four columns">
			<!-- Headline -->
			<h3 class="headline footer">Servicios</h3>
			<span class="line"></span>
			<div class="clearfix"></div>

			<ul class="footer-links">
				<li><a href="#">Serigrafía</a></li>
				<li><a href="#">Gran Formato</a></li>
				<li><a href="#">Flexografía</a></li>
				<li><a href="#">Imprenta</a></li>
				<li><a href="#">Textil</a></li>
			</ul>
		</div>

		<div class="four columns">

			<!-- Headline -->
			<h3 class="headline footer">Mi Cuenta</h3>
			<span class="line"></span>
			<div class="clearfix"></div>

			<ul class="footer-links">
				<li><a href="#">My Account</a></li>
			</ul>

		</div>

		<div class="four columns">

			<!-- Headline -->
			<h3 class="headline footer">Newsletter</h3>
			<span class="line"></span>
			<div class="clearfix"></div>
			<p>Sign up to receive email updates on new product announcements, gift ideas, special promotions, sales and more.</p>

			<form action="#" method="get">
				<button class="newsletter-btn" type="submit">Join</button>
				<input class="newsletter" type="text" placeholder="mail@example.com" value=""/>
			</form>
		</div>

	</div>
	<!-- Container / End -->
</div>
<!-- Footer / End -->

<!-- Footer Bottom / Start -->
<div id="footer-bottom">

	<!-- Container -->
	<div class="container">
		<div class="eight columns">© Copyright 2014 by <a href="#">YELOS</a>. Todos los Derechos Reservados..</div>
	</div>
	<!-- Container / End -->

</div>
<!-- Footer Bottom / End -->

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>


<!-- Java Script
================================================== -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/scripts/jquery.jpanelmenu.js"></script>
<script src="/js/scripts/jquery.themepunch.plugins.min.js"></script>
<script src="/js/scripts/jquery.themepunch.revolution.min.js"></script>
<script src="/js/scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="/js/scripts/jquery.magnific-popup.min.js"></script>
<script src="/js/scripts/hoverIntent.js"></script>
<script src="/js/scripts/superfish.js"></script>
<script src="/js/scripts/jquery.pureparallax.js"></script>
<script src="/js/scripts/jquery.pricefilter.js"></script>
<script src="/js/scripts/jquery.selectric.min.js"></script>
<script src="/js/scripts/jquery.royalslider.min.js"></script>
<script src="/js/scripts/SelectBox.js"></script>
<script src="/js/scripts/modernizr.custom.js"></script>
<script src="/js/scripts/waypoints.min.js"></script>
<script src="/js/scripts/jquery.flexslider-min.js"></script>
<script src="/js/scripts/jquery.counterup.min.js"></script>
<script src="/js/scripts/jquery.tooltips.min.js"></script>
<script src="/js/scripts/jquery.isotope.min.js"></script>
<script src="/js/scripts/puregrid.js"></script>
<script src="/js/scripts/stacktable.js"></script>
<script src="/js/scripts/custom.js"></script>


<!-- Style Switcher
================================================== -->
<script src="scripts/switcher.js"></script>


</body>
</html>