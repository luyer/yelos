
<!-- Slider
================================================== -->
<div class="container fullwidth-element home-slider">

	<div class="tp-banner-container">
		<div class="tp-banner">
			<ul>
				<!-- Slide 1  -->
				<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
					<img src="/img/slider1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
 					<div class="caption sfb fadeout" data-x="750" data-y="170" data-speed="400" data-start="800"  data-easing="Power4.easeOut">
						<h2>Dress Sharp</h2>
						<h3>Learn from the classics</h3>
						<a href="shop-with-sidebar.html" class="caption-btn">Shop The Collection</a>
					</div>
				</li>

				<!-- Slide 2  -->
				<li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000">
 					<img src="/img/slider2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
 					<div class="caption sfb fadeout" data-x="750" data-y="170" data-speed="400" data-start="800"  data-easing="Power4.easeOut">
						<h2>Urban Style</h2>
						<h3>Every cut and colour</h3>
						<a href="shop-with-sidebar.html" class="caption-btn">Shop The Collection</a>
					</div>
				</li>

				<!-- Slide 3  -->
				<li data-transition="fadetotopfadefrombottom" data-slotamount="7" data-masterspeed="1000">
 					<img src="/img/slider3.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
 					<div class="caption dark sfb fadeout" data-x="145" data-y="170" data-speed="400" data-start="800"  data-easing="Power4.easeOut">
						<h2>New In</h2>
						<h3>Pants and T-Shirts</h3>
						<a href="shop-with-sidebar.html" class="caption-btn">Shop The Collection</a>
					</div>
				</li>

			</ul>
		</div>
	</div>
</div>

<!-- New Arrivals
================================================== -->
<div class="container">

	<!-- Headline -->
	<div class="sixteen columns">
		<h3 class="headline">Destacados</h3>
		<span class="line margin-bottom-0"></span>
	</div>

	<!-- Carousel -->
	<div id="new-arrivals" class="showbiz-container sixteen columns" >

		<!-- Navigation -->
		<div class="showbiz-navigation">
			<div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
			<div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="clearfix"></div>

		<!-- Products -->
		<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
			<div class="overflowholder">
				<ul>
					<?php foreach($destacados as $des){?>
					<!-- Product #1 -->
					<li>
						<figure class="product">
							<div class="mediaholder">
								<a href="/productos/view/<?php echo $des['Producto']['id']; ?>">
									<img alt="" src="/img/productos/<?php echo $des['Producto']['foto1'] ?>"/>
									<div class="cover">
										<img alt="" src="/img/productos/<?php echo $des['Producto']['foto1'] ?>"/>
									</div>
								</a>
								<a href="/productos/view/<?php echo $des['Producto']['id']; ?>" class="product-button"><i class="fa fa-paper-plane"></i> Ver Producto</a>
							</div>

							<a href="/productos/view/<?php echo $des['Producto']['id']; ?>">
								<section>
									<span class="product-category"><?php echo $des['Categoria']['nombre'] ?></span>
                  <h5>
                    <?php 
                    echo $this->Text->truncate(
                          ucfirst(strtolower($des['Producto']['nombre'])),
                          35,
                          array(
                              'ellipsis' => '...',
                              'exact' => false
                          )
                      );
                    ?>
                  </h5>	
									<!--<span class="product-price">$<?php echo $des['Producto']['precio'] ?></span>-->
								</section>
							</a>
						</figure>
					</li>
					<?php }?>
				</ul>
				<div class="clearfix"></div>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>

</div>


<!-- Parallax Banner
================================================== -->
<div class="parallax-banner fullwidth-element"  data-background="#000" data-opacity="0.45" data-height="200">
	<img src="/img/slider3.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<div class="parallax-title">Bienvenidos a yelos <span>otro texto</span></div>
</div>

    