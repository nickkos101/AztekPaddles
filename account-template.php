<?php /* Template Name: My Account */ ?>
<?php get_header(); ?>
<main>
	<div class="gray-wrap col-wrap cart-style">
		<div class="wc-aztek-border">
		</div>
		<div class="mini-container account-style">
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