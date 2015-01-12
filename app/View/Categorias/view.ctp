<!-- Titlebar
================================================== -->
<section class="parallax-titlebar fullwidth-element"  data-background="#000" data-opacity="0.45" data-height="160">

	<img src="/images/titlebar_bg_01.jpg" alt="" />
	<div class="parallax-overlay"></div>


	<div class="parallax-content">
		<h2><?php echo h($categoria['Categoria']['nombre']); ?> <span>Algun texto acerca de la categoría</span></h2>

		<nav id="breadcrumbs">
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#"><?php echo h($categoria['Categoria']['nombre']); ?></a></li>
			</ul>
		</nav>
	</div>

</section>

<div class="container">
<!-- Sidebar
================================================== -->
	<div class="four columns">

		<!-- Categories -->
		<div class="widget margin-top-0">
			<h3 class="headline">Categorias</h3><span class="line"></span><div class="clearfix"></div>

			<ul id="categories">
				<?php foreach($categorias as $k => $cat){?>
				<li><a href="/categorias/view/<?php echo $cat['Categoria']['id']; ?>"><?php echo $cat['Categoria']['nombre']; ?> <span>(12)</span></a>
				</li>
				<?php }?>
			</ul>
			<div class="clearfix"></div>

		</div>

	</div>


	<!-- Content
	================================================== -->
	<div class="twelve columns">

	</div>

	<!-- Products -->
	<div class="twelve columns products">
		<?php foreach($productos as $k => $producto){?>
		<!-- Product #1 -->
		<div class="four shop columns">
			<figure class="product">
				<div class="mediaholder">
					<a href="/productos/view/<?php echo $producto['Producto']['id']; ?>">
						<img alt="" src="/img/productos/<?php echo $producto['Producto']['foto1'];?>"/>
						<div class="cover">
							<img alt="" src="/img/productos/<?php echo $producto['Producto']['foto1'];?>"/>
						</div>
					</a>
					<a href="/productos/view/<?php echo $producto['Producto']['id']; ?>" class="product-button">Ver Producto</a>
				</div>
				<a href="/productos/view/<?php echo $producto['Producto']['id']; ?>">
					<section>
						
						<h5><?php echo $producto['Producto']['nombre']; ?></h5>	
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

			<nav class="pagination-next-prev">
				<ul>
					<li><a href="#" class="prev"></a></li>
					<li><a href="#" class="next"></a></li>
				</ul>
			</nav>
		</div>

	</div>

</div>

<div class="margin-top-15"></div>