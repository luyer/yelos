
<!-- Titlebar
================================================== -->
<section class="parallax-titlebar fullwidth-element"  data-background="#000" data-opacity="0.45" data-height="160">

	<img src="/images/titlebar_bg_01.jpg" alt="" />
	<div class="parallax-overlay"></div>

	<div class="parallax-content">
		<h2>Búsqueda <span>International Shipping</span></h2>

		<nav id="breadcrumbs">
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Búsqueda</a></li>
			</ul>
		</nav>
	</div>

</section>

<div class="container">
	<!-- Content
	================================================== -->

	<!-- Products -->
	<div class="products">
		<?php foreach($productos as $k => $producto){?>
		<!-- Product #1 -->
		<div class="four columns">
			<figure class="product">
				<div class="mediaholder">
					<a href="variable-product-page.html">
						<img alt="" src="/img/productos/<?php echo $producto['Producto']['foto1'];?>"/>
						<div class="cover">
							<img alt="" src="/img/productos/<?php echo $producto['Producto']['foto1'];?>"/>
						</div>
					</a>
					<a href="#" class="product-button"></i>Ver detalle</a>
				</div>

				<a href="variable-product-page.html">
					<section>
						<span class="product-category">Skirts</span>
						<h5><?php echo $producto['Producto']['nombre'];?></h5>
						<!--<span class="product-price">$<?php echo $producto['Producto']['precio'];?></span>-->
					</section>
				</a>
			</figure>
		</div>
		<?php
			
		}?>
		<div class="clearfix"></div>
		<!-- Pagination -->
		<div class="pagination-container">
			<nav class="pagination">
				<ul>
					<li><a href="#" class="current-page">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
				</ul>
			</nav>

			<nav class="pagination-next-prev full-width">
				<ul>
					<li><a href="#" class="prev"></a></li>
					<li><a href="#" class="next"></a></li>
				</ul>
			</nav>
		</div>

	</div>

</div>

<div class="margin-top-15"></div>