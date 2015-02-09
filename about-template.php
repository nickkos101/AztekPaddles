<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>
<main>
	<div class="column full atom-weave">
		<img src="<?php echo get_template_directory_uri(); ?>/images/atom-weave.jpg">
		<div class="overlay">
			<div class="mini-container">
				<h2><span>Who</span> We Are</h2>
				<p>Imagine a revolutionary material that’s been used to create some of the lightest products on Earth but so strong that it can stop a bullet. That’s the power of nano particles, and we’re the experts that know how to use them. We are BST.</p>
				<img class="alignright" src="<?php echo get_template_directory_uri(); ?>/images/bst-nano.png">
			</div>
		</div>
	</div>
	<div class="white-wrap col-wrap page-content">
		<div class="wc-aztek-border"></div>
		<div class="mini-container page-contain">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
	<div class="wc-aztek-border"></div>
</div>
</main>
<?php get_footer(); ?>