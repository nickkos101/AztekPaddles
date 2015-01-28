<?php /* Template Name: Complete Surf Paddle Template */ ?>
<?php get_header(); ?>
<main>
	<div class="white-wrap col-wrap">
		<div class="wc-aztek-border"></div>
		<div class="product-cat-page products">
			<div class="container">
				<?php 
				$racepaddleargs = array(
					'posts_per_page' => -1, 
					'post_type' => 'product',
					'orderby' => 'menu_order',
					'order' => 'asc',
					'post_status' => 'publish',
					'name' => 'surf-paddle',
					'meta_query' => array(
						array(
							'key' => '_visibility',
							'value' => array( 'catalog', 'visible' ),
							'compare' => 'IN'
							),
						),
					);
					query_posts($racepaddleargs); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="full column">
						<div class="product-cat-items complete-paddle paddle paddle-feaux">
							<div class="column full">
								<h2 class="paddle-title"><?php the_title(); ?></h2>
								<p class="price paddle-price"><?php woocommerce_get_template( 'loop/price.php' ); ?></p>
								<?php
								if ( has_post_thumbnail() ) {
									the_post_thumbnail('full');
								} 
								?>
							</div>
							<div class="column half">
								<p class="paddle-description">The Aztek Complete Standup Surf Paddle is custom fit to you. We’ll walk you through our easy fit guide to gather your unique specifications.</p>
								<a href="<?php echo get_site_url(); ?>/get-fit" class="buy-now">Get Fit<i class="fa fa-angle-right"></i></a>
							</div>
							<div class="column half">
								<h5 class="paddle-features-title">Aztek Complete Surf Paddles come with:</h5>
								<ul class="paddle-features">
									<li>The Aztek Flex Profile Shaft, engineered with an upper half that produces flex or ”kick,” based on your fit guide specs, while the lower half of the shaft remains stiff. This enables maximum energy transfer and more efficiency in the water.</li>
									<li>The Carbon Fiber Surf blade has been designed for maximum speed and maneuverability in waves and choppy water. A tear drop shape enables a quick bite and more versatility to change directions on a dime. The 12 degree angle increases board lift with slight front scoop angle for better catch and bite.  An optimized dihedral eliminates chatter and flutter.</li>
									<li>An ergonomic, finger-slot handle provides maximum comfort and versatility.</li>
									<li>The TradeBlade Wrench makes it easy to remove and replace blades with our patent-pending Trade Blade system. An audible "click" assures that your blade has been tightened to the proper torque setting.</li>
								</ul>
							</div>

						</div>
					</div>
				<?php endwhile; else: ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="wc-aztek-border"></div>
</div>
</main>
<?php get_footer(); ?>