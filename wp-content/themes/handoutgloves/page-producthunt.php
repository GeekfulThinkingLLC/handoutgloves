<?php

/*
* Template Name: Product Hunt
*/

?>

<?php get_template_part('mainnav') ?>
 
 <?php get_header(); ?>

 <?php get_sidebar(); ?>

<div class="home">
	<div class="zipper-tag-nav">
    <img src="<?php echo theme_image('hunt-zipper-tag.png'); ?>" class="header-zippertag-img1">
  </div> 
	<div class="product-landing-page-container">
		<div class="row">
			<div class="col-md-12 col-lg-4 snow-productpage-header" style="background:url('<?php echo theme_image('HO Snow6.png'); ?>') no-repeat center center;background-size: 90% 70%;">
				<h1>HUNT GLOVE</h1>
				<div class="snow-product-first-paragraph1">	
					<p>Lorem ipsum dolor sit amet, consectetur</p>
					<p>adipiscing elit. Donec neque lectus,</p>
					<p>commodo in nulla eget, dictum magna.</p>
				</div>
				<div class="snow-product-first-paragraph2">	
					<p>Lorem ipsum dolor sit amet, consectetur</p>
					<p>adipiscing elit. Donec neque lectus,</p>
					<p>commodo in nulla eget, dictum magna.</p>
				</div>
				<div class="form-group">
	    		<select id="exampleSelect1" class="model-btn">
			      <option disabled hidden selected>Model</option>
			      <option>Pro</option>
			      <option>Sport</option>
			      <option>Light Weight</option>
			    </select>
		    	<input type="Quantity" class="quantity-btn" id="exampleInputPassword1" placeholder="QTY">
			  </div>
			  <div class="form-group">
				  <div class="row justify-content-center product-landing-size-focus">
		    		<button type="button" class="size-buttons one" id="exampleInputPassword1" placeholder="XS">XS</button>
		    		<button type="button" class="size-buttons two" id="exampleInputPassword1" placeholder="S">S</button>
		    		<button type="button" class="size-buttons three" id="exampleInputPassword1" placeholder="M">M</button>
		    		<button type="button" class="size-buttons four" id="exampleInputPassword1" placeholder="L">L</button>
		    		<button type="button" class="size-buttons five" id="exampleInputPassword1" placeholder="XL">XL</button>
		  		</div>
		  	</div>
	  		<div class="form-group">
	  			<button type="button" class="cart-button" id="exampleInputPassword1" placeholder="ADD TO CART">ADD TO CART</button>
	  		</div>
			</div>

			<div class="col-md-12 col-lg-8">

			</div>
		</div>

		<div class="row product-page-bottom-content">
			<div class="col-md-6 col-lg-1 landing-page-products-mobile">
				<div class="product-page-bottom-pictures">
					<img src="http://via.placeholder.com/100x200">
				</div>
			</div>
			<div class="col-md-6 col-lg-2 landing-page-products-mobile">
				<h4>Pro</h4>
				<a href="#">Learn More</a>
				<br>
				<a href="#">Buy Now</a>
			</div>


			<div class="col-md-6 col-lg-1 landing-page-products-mobile">
				<div class="product-page-bottom-pictures">
					<img src="http://via.placeholder.com/100x200">
				</div>
			</div>
			<div class="col-md-6 col-lg-2 landing-page-products-mobile">
				<h4>Sport</h4>
				<a href="#">Learn More</a>
				<br>
				<a href="#">Buy Now</a>
			</div>


			<div class="col-md-6 col-lg-1 landing-page-products-mobile">
				<div class="product-page-bottom-pictures">
					<img src="http://via.placeholder.com/100x200">
				</div>
			</div>
			<div class="col-md-6 col-lg-2 landing-page-products-mobile">
				<h4>Light Weight</h4>
				<a href="#">Learn More</a>
				<br>
				<a href="#">Buy Now</a>
			</div>

			<div class="col-md-6 col-lg-1 landing-page-products-mobile">
				<div class="product-page-bottom-pictures">
					<img src="http://via.placeholder.com/100x200">
				</div>
			</div>
			<div class="col-md-6 col-lg-2 landing-page-products-mobile">
				<h4>Childrens</h4>
				<a href="#">Learn More</a>
				<br>
				<a href="#">Buy Now</a>
			</div>
		</div>
	</div>
</div>
	<div class="snow-landing-footer">
    <img src="<?php echo theme_image('hunt-landing-footer-1.png'); ?>" class="landing-page-footer">
  </div>

<?php get_footer(); ?>