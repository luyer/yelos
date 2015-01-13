<!-- Titlebar
================================================== -->
<section class="titlebar">
<div class="container">
	<div class="sixteen columns">
		<h2>Catálogo</h2>
		
		<nav id="breadcrumbs">
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Products</a></li>
			</ul>
		</nav>
	</div>
</div>
</section>


<div class="container">

<!-- Slider
================================================== -->
	<div class="eight columns" >
		<div class="slider-padding">
			<div id="product-slider-vertical" class="royalSlider rsDefault">
			    <a href="images/product_item_04a-big.jpg" class="mfp-gallery" title="First Title"><img class="rsImg" src="/img/productos/<?php echo h($producto['Producto']['foto1']); ?>" data-rsTmb="/img/productos/<?php echo h($producto['Producto']['foto1']); ?>" alt="" /></a>
			    <a href="images/product_item_04b-big.jpg" class="mfp-gallery" title="Second Title"><img class="rsImg" src="/img/productos/<?php echo h($producto['Producto']['foto2']); ?>" data-rsTmb="/img/productos/<?php echo h($producto['Producto']['foto2']); ?>" alt="" /></a>
			    <a href="images/product_item_04c-big.jpg" class="mfp-gallery" title="Third Title"><img class="rsImg" src="/img/productos/<?php echo h($producto['Producto']['foto3']); ?>" data-rsTmb="/img/productos/<?php echo h($producto['Producto']['foto3']); ?>" alt="" /></a>
			 </div>
			 <div class="clearfix"></div>
		</div>
	</div>


<!-- Content
================================================== -->
	<div class="eight columns">
		<div class="product-page">
			
			<!-- Headline -->
			<section class="title">
				<h2><?php echo h($producto['Producto']['nombre']); ?></h2>
				<!--<span class="product-price">$49.00</span>-->
			</section>

			<!-- Text Parapgraph -->
			<section>
				<p class="margin-reset"><?php echo h($producto['Producto']['descripcion']); ?></p>

				<!-- Share Buttons -->	
				<!--<div class="share-buttons">
					<ul>
						<li><a href="#">Share</a></li>
						<li class="share-facebook"><a href="#">Facebook</a></li>
						<li class="share-twitter"><a href="#">Twitter</a></li>
						<li class="share-gplus"><a href="#">Google Plus</a></li>
						<li class="share-pinit"><a href="#">Pin It</a></li>
					</ul>
				</div>-->
				<div class="clearfix"></div>
			</section>

		</div>
	</div>

</div>


<!-- Related Products -->
<div class="container margin-top-5">

	<!-- Headline -->
	<div class="sixteen columns">
		<h3 class="headline">Productos Relacionados</h3>
		<span class="line margin-bottom-0"></span>
	</div>

	<!-- Products -->
	<div class="products">
		<?php foreach($relacionados as $rel){?>
		<!-- Product #1 -->
		<div class="four columns">
			<figure class="product effect2">
				<div class="mediaholder">
					<a href="/productos/view/<?php echo $rel['Producto']['id'] ?>">
						<img alt="" src="/img/productos/<?php echo $rel['Producto']['foto1'] ?>"/>
						<div class="cover">
							<img alt="" src="/img/productos/<?php echo $rel['Producto']['foto1'] ?>"/>
						</div>
					</a>
					<a href="/productos/view/<?php echo $rel['Producto']['id'] ?>" class="product-button"><i class="fa fa-paper-plane"></i> Ver Producto</a>
				</div>

				<a href="/productos/view/<?php echo $rel['Producto']['id'] ?>">
					<section>
						<span class="product-category"><?php echo $rel['Producto']['sku']; ?></span>
            <h5>
							<?php 
							echo $this->Text->truncate(
										ucfirst(strtolower($rel['Producto']['nombre'])),
										35,
										array(
												'ellipsis' => '...',
												'exact' => false
										)
								);
							?>
            </h5>	
					</section>
				</a>
			</figure>
		</div>
		<?php }?>
	</div>
</div>

<div class="margin-top-50"></div>