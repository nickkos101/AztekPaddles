<?php /* Template Name: Shop Template */ ?>
<?php get_header(); ?>
<main>
	<div class="white-wrap col-wrap">
		<div class="wc-aztek-border"></div>
		<div class="product-cat-page products">
			<div class="container">
				<?php query_posts(array('posts_per_page' => -1, 'post_type' => 'product','product_cat' => 'paddles' , 'orderby' => 'menu_order')); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="full column">
					<div class="product-cat-items complete-paddle paddle">
						<div class="column sixth">
							<h2><?php the_title(); ?></h2>
							<p>A complete paddle built to order; equipped with custom blade, handle and shaft.</p>
							<p class="price"><?php woocommerce_get_template( 'loop/price.php' ); ?></p>
						</div>
						<div class="column two-thirds">
							<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('full');
							} 
							?>
						</div>
						<div class="column sixth taligncenter">
							<a href="<?php echo get_site_url(); ?>/buy-now/<?php echo($post->post_name) ?>" class="buy-now">Buy Now <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			<?php endwhile; else: ?>
		<?php endif; ?>
	</div>
	<div class="container">
		<?php 
		$shaftargs = array(
			'posts_per_page' => -1, 
			'post_type' => 'product',
			'orderby' => 'menu_order',
			'order' => 'asc',
			'post_status' => 'publish',
			'tax_query' => array(
				'relation' => 'AND',
				array(
					'taxonomy' => 'product_cat',
					'field' => 'slug',
					'terms' => 'shafts',
					'operator' => 'IN'
					),
				),
			'meta_query' => array(
				array(
					'key' => '_visibility',
					'value' => array( 'catalog', 'visible' ),
					'compare' => 'IN'
					),
				),
			);
			query_posts($shaftargs); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink(); ?>">
				<div class="third column">
					<div class="product-cat-items">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('medium');
						} 
						?>
						<h3><?php the_title(); ?></h3>
						<?php woocommerce_get_template( 'loop/price.php' ); ?>
					</div>
				</div>
			</a>
		<?php endwhile; else: ?>
	<?php endif; ?>
</div>
	<div class="container">
		<?php 
		$productargs = array(
			'posts_per_page' => -1, 
			'post_type' => 'product',
			'orderby' => 'menu_order',
			'order' => 'asc',
			'post_status' => 'publish',
			'tax_query' => array(
				'relation' => 'AND',
				array(
					'taxonomy' => 'product_cat',
					'field' => 'slug',
					'terms' => array( 'surf-blades', 'race-blades' ),
					'operator' => 'IN'
					),
				),
			'meta_query' => array(
				array(
					'key' => '_visibility',
					'value' => array( 'catalog', 'visible' ),
					'compare' => 'IN'
					),
				),
			);
			query_posts($productargs); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink(); ?>">
				<div class="fifth column">
					<div class="product-cat-items">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('medium');
						} 
						?>
						<h3><?php the_title(); ?></h3>
						<?php woocommerce_get_template( 'loop/price.php' ); ?>
					</div>
				</div>
			</a>
		<?php endwhile; else: ?>
	<?php endif; ?>
</div>
	<div class="container">
		<?php 
		$productargs = array(
			'posts_per_page' => -1, 
			'post_type' => 'product',
			'orderby' => 'menu_order',
			'order' => 'asc',
			'post_status' => 'publish',
			'tax_query' => array(
				'relation' => 'AND',
				array(
					'taxonomy' => 'product_cat',
					'field' => 'slug',
					'terms' => 'handles',
					'operator' => 'IN'
					),
				),
			'meta_query' => array(
				array(
					'key' => '_visibility',
					'value' => array( 'catalog', 'visible' ),
					'compare' => 'IN'
					),
				),
			);
			query_posts($productargs); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink(); ?>">
				<div class="fifth column">
					<div class="product-cat-items">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('medium');
						} 
						?>
						<h3><?php the_title(); ?></h3>
						<?php woocommerce_get_template( 'loop/price.php' ); ?>
					</div>
				</div>
			</a>
		<?php endwhile; else: ?>
	<?php endif; ?>
</div>
</div>
<div class="wc-aztek-border"></div>
</div>
</main>
<?php get_footer(); ?>