<!-- Titlebar
================================================== -->
<section class="parallax-titlebar fullwidth-element"  data-background="#000" data-opacity="0.45" data-height="160">

	<img src="/img/slider1.jpg" alt="" />
	<div class="parallax-overlay"></div>


	<div class="parallax-content">
		<h2>Catálogo <span>Selecciona una categoría</span></h2>

		<nav id="breadcrumbs">
			<ul>
				<li><a href="/">Inicio</a></li>
				<li><a href="/categorias">Promocionales</a></li>
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
				<li>
        	<a href="/categorias/view/<?php echo $cat['Categoria']['id']; ?>"> 
          	<i class="fa fa-caret-right"></i> <?php echo ucfirst(strtolower($cat['Categoria']['nombre'])); ?> 
            <span>(12)</span>
          </a>
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
		<?php foreach($categorias as $cat){?>
		<!-- Product #1 -->
		<div class="four shop columns">
			<figure class="product effect8" >
				<div class="mediaholder">
					<a href="/categorias/view/<?php echo $cat['Categoria']['id']; ?>">
						<?php if(!empty($cat['Categoria']['foto'])){ ?>
							<img alt="" src="/img/categorias/<?php echo $cat['Categoria']['foto'];?>"/>
						<?php }
						else{ ?>
							<img alt="" src="/img/productos/<?php echo $cat['Producto'][0]['foto1'];?>"/>
						<?php }?>
						<div class="cover">
							<?php if(!empty($cat['Categoria']['foto'])){ ?>
								<img alt="" src="/img/categorias/<?php echo $cat['Categoria']['foto'];?>"/>
							<?php }
							else{ ?>
								<img alt="" src="/img/productos/<?php echo $cat['Producto'][0]['foto1'];?>"/>
							<?php }?>
						</div>
						
					</a>
					<a href="/categorias/view/<?php echo $cat['Categoria']['id']; ?>" class="product-button"><i class="fa fa-paper-plane"></i> Ver Categoría</a>
				</div>

				<a href="/categorias/view/<?php echo $cat['Categoria']['id']; ?>">
					<section>
						<span class="product-category"><?php echo $cat['Categoria']['nombre']; ?></span>
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