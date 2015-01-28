<?php /* Template Name: Order Tracking */ ?>
<?php get_header(); ?>
<main>
	<div class="gray-wrap col-wrap cart-style tracking">
		<div class="wc-aztek-border">
		</div>
		<div class="container account-style">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
	<div class="wc-aztek-border">
	</div>
</div>
</main>
<?php get_footer(); ?>